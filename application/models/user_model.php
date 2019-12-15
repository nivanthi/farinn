<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function check_login($email, $password) {
        $md5_password = md5($password);
        $query_str = "SELECT admin_id, firstname, lastname, photo, admin_level,email FROM admin WHERE email = ? and password = ? ";
        $result = $this->db->query($query_str, array($email, $md5_password));

        if ($result->num_rows() == 1) {
            return $result->row();
        }
        return FALSE;
    }

    function get_profile($id) { //get batch list first dropdown
        $data = array();
        $this->db->select('admin_id ,firstname,lastname, email,admin_level,photo, date_created,NIC, password,phone,reg_date');
        $this->db->where('admin_id', $id);
        $query = $this->db->get('admin');

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function update_password($newpwd, $primary_key) {

        $data = array('password' => $newpwd);
        $this->db->where('admin_id', $primary_key);
        $this->db->update('admin', $data);

        return true;
    }

    public function get_countries() {//get countires

        $data = array();
        $this->db->select('country_id, short_name');

        $query = $this->db->get('country_t');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    public function get_room_type() {//get countires

        $data = array();
        $this->db->select('type_id, type');

        $query = $this->db->get('room_type');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function get_EventList() {
        $data = array();
        $this->db->select('function_type_id,type');
        $query = $this->db->get('function_type');

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function get_BanquetList() {
        $data = array();
        $this->db->select('hall_id , hall_name');
        $query = $this->db->get('banquet');

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function get_BanquetMenu() {
        $data = array();
        $this->db->select('menu_id , menu_no, local_price');
        $query = $this->db->get('banquet_menu');

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }
    
    function save_room_reservation($formData, $table){
        $this->db->insert($table, $formData);
        $last_id = $this->db->insert_id();
        return $last_id;
    }

    function save_banquet_reservation($form1Data, $form2Data, $menuRows, $form3Data, $otherChargeRows, $sub, $grand, $bal) {
        //$this->db->trans_begin();

        $this->db->trans_start();

        $basic_details = array(
            'function_type_id' => $form1Data['functions'],
            'banquet_menu_id' => $form1Data['menu'],
            'banquet_id' => $form1Data['hall'],
            'date' => $form1Data['date'],
            'time' => $form1Data['funcTime'],
            'hour' => $form1Data['hour'],
            'customer' => $form1Data['name'],
            'email' => $form1Data['email'],
            'contact' => $form1Data['contact'],
            'guest_count' => $form1Data['count'],
        );

        
        $aa = $this->db->insert('banquet_reservation', $basic_details);

        $banquet_res_no = $this->db->insert_id();

        $extra_facilities = array(
            'banquet_reservation_id' => $banquet_res_no,
            'liqueur' => array_key_exists('txtLiqueur', $form2Data) ? $form2Data['txtLiqueur'] : '0.00',
            'poruwa' => array_key_exists('txtPoruwa', $form2Data) ? $form2Data['txtPoruwa'] : '0.00',
            'musicGroup' => array_key_exists('txtMusicGroup', $form2Data) ? $form2Data['txtMusicGroup'] : '0.00',
            'dancingGroup' => array_key_exists('txtDancingGroup', $form2Data) ? $form2Data['txtDancingGroup'] : '0.00',
            'flowerArrengement' => array_key_exists('txtFlowerArrengement', $form2Data) ? $form2Data['txtFlowerArrengement'] : '0.00',
            'cakeStructure' => array_key_exists('txtCakeStructure', $form2Data) ? $form2Data['txtCakeStructure'] : '0.00',
        );


        $this->db->insert('banquet_extra', $extra_facilities);


        for ($i = 0; $i <= $menuRows - 3; $i++) {
            if ($i == 0) { //html inputs
                $menu_items[] = array(
                    'banquet_reservation_id' => $banquet_res_no,
                    'descrip' => $form2Data['txtMenuDiscrip'],
                    'quantity' => $form2Data['txtMenuQty'],
                    'unit_price' => $form2Data['txtMenuUnitPrice']
                );
            } else { //DOM created elements
                $menu_items[] = array(
                    'banquet_reservation_id' => $banquet_res_no,
                    'descrip' => $form2Data['txtMenuDiscrip' . $i],
                    'quantity' => $form2Data['txtMenuQty' . $i],
                    'unit_price' => $form2Data['txtMenuUnitPrice' . $i],
                );
            }
        }

        $this->db->insert_batch('banquet_menu_request', $menu_items);

        for ($i = 0; $i <= $otherChargeRows - 3; $i++) {

            if ($i == 0) { //html inputs
                $other_charge_items[] = array(
                    'banquet_reservation_id' => $banquet_res_no,
                    'description' => $form3Data['txtOtherChargeDescrip'],
                    'cost' => $form3Data['txtOtherChargeAmount']
                );
            } else { //DOM created elements
                $other_charge_items[] = array(
                    'banquet_reservation_id' => $banquet_res_no,
                    'description' => $form3Data['txtOtherChargeDescrip' . $i],
                    'cost' => $form3Data['txtOtherChargeAmount' . $i]
                );
            }
        }

        $this->db->insert_batch('banquet_other_charges', $other_charge_items);

        $banquet_charges = array(
            'banquet_reservation_id' => $banquet_res_no,
            'banquet_charge' => $form3Data['txtFinalBanquetCharge'],
            'extra_facility_charge' => $form3Data['txtFinalExtraCharge'],
            'menu_request_charge' => $form3Data['txtFinalMenuCharge'],
            'other_charge' => $form3Data['txtFinalOtherCharge'],
            'sub_total' => $sub,
            'discount' => $form3Data['txtDiscount'],
            'dis_ammount' => $form3Data['txtDiscountedAmnt'],
            'nbt_rate' => $form3Data['txtnbtRate'],
            'nbt_ammount' => $form3Data['txtnbtAmnt'],
            'vat_rate' => $form3Data['txtVatRate'],
            'vat_ammount' => $form3Data['txtVatAmnt'],
            'grand_total' => $grand,
            'first_payment' => $form3Data['txtAdvance'],
            'first_pay_date' => $form3Data['advancePayDate'],
            'balance_after_first_pay' => $bal,
            'pay_complete' => '0',
        );

        $this->db->insert('banquet_total_charges', $banquet_charges);


        /* if ($this->db->trans_status() === FALSE)
          {
          return $this->db->affected_rows();
          $this->db->trans_rollback();

          }
          else
          {
          return $this->db->affected_rows();
          $this->db->trans_commit();

          } */

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE)
            return 0;
        else
            return 1;
    }

    function get_Banquet_Reservation_List() {
        $query_str = "SELECT CONCAT('#BNQT - R', br.banquet_reservation_id) as resNo, customer, contact, type,  date,  grand_total, balance_after_first_pay , pay_complete 
                         FROM banquet_reservation br join  function_type ft 
                         on br.function_type_id = ft.function_type_id
                         LEFT join banquet_total_charges btc 
                         on btc.banquet_reservation_id = br.banquet_reservation_id ORDER BY resNo DESC";
        
        $result = $this->db->query($query_str);

        if ($result->num_rows() > 0) {

            return $result->result_array();
        }
    }

    function delete_banquet_reservation($id) {
        $query = $this->db->query('SELECT  pay_complete  FROM  banquet_total_charges  WHERE  banquet_reservation_id =' . $id . '');
        $val = $query->row()->pay_complete;


        if ($val == 1) {
            return 0;
        } else {
            $this->db->trans_start();

            $this->db->delete('banquet_total_charges', array('banquet_reservation_id' => $id));
            $this->db->delete('banquet_extra', array('banquet_reservation_id' => $id));
            $this->db->delete('banquet_menu_request', array('banquet_reservation_id' => $id));
            $this->db->delete('banquet_other_charges', array('banquet_reservation_id' => $id));
            $this->db->delete('banquet_reservation', array('banquet_reservation_id' => $id));


            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE)
                return 0;
            else
                return 1;
        }
    }

//--------------------------------- TOUR RESERVATION -------------------------------------------------

    public function get_packages() {//get packages
        $data = array();
        $this->db->select('package_id, package_name');
        $query = $this->db->get('packages');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    public function get_reservationID($res_stat = null) {//get reservationID
        $data = array();
        $this->db->select('reservation_no');
        if($res_stat != null){
            $this->db->where_in('reservation_status', $res_stat);
        }
        
        $query = $this->db->get('reservation');
        
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    public function save_tour_details($data) {//save tour details to db

        $query = $this->db->query('SELECT tour_cost , meal_cost FROM packages WHERE package_id =' . $data['reservation_no']);
        $tourCost = $query->row()->tour_cost;
        $personMealCost = $query->row()->meal_cost;


        if (($data['meal'] == 'yes') && (intval($data['participant'])) > 0)
            $mealCost = floatval($personMealCost) * floatval($data['participant']);
        else
            $mealCost = 0;

        $tour_data = array(
            'reservation_no' => $data['reservation_no'],
            'package_id' => $data['package_id'],
            'tour_cost' => $tourCost,
            'meal_cost' => $mealCost,
            'participant' => $data['participant'],
            'description' => $data['description'],
            'date' => $data['date'],
            'time' => $data['time'],
        );


        if ($this->db->insert('tour_reservation', $tour_data)) {
            return $this->db->affected_rows();
        } else {
            return false;
        }
    }
    
    function update_tour_details($data){
        $query = $this->db->query('SELECT tour_cost , meal_cost FROM packages WHERE package_id =' . $data['reservation_no']);
        $tourCost = $query->row()->tour_cost;
        $personMealCost = $query->row()->meal_cost;


        if (($data['meal'] == 'yes') && (intval($data['participant'])) > 0)
            $mealCost = floatval($personMealCost) * floatval($data['participant']);
        else
            $mealCost = 0;
        
        $tour_data = array(
            'reservation_no' => $data['reservation_no'],
            'package_id' => $data['package_id'],
            'tour_cost' => $tourCost,
            'meal_cost' => $mealCost,
            'participant' => $data['participant'],
            'description' => $data['description'],
            'date' => $data['date'],
            'time' => $data['time'],
        );

        $this->db->where('tour_reservation_id', $data['tour_res_id']);
        $this->db->update('tour_reservation', $tour_data);
        return $this->db->affected_rows();
    }

    function get_tour_reservation_list() { //get tour reservation list
        $query_str = "SELECT  CONCAT('#TR - R', reservation_no) as reservation_no, tour_reservation_id,  package_id,tour_cost ,meal_cost, participant ,description ,date,time  FROM tour_reservation ";
        
        $result = $this->db->query($query_str);

        if ($result->num_rows() > 0) {

            return $result->result_array();
        }
    }
    
    function get_tour_reservation($tourid=null) { //get tour reservation list
        $data = array();
        $this->db->select('tour_reservation_id');
        $this->db->select('reservation_no');
        $this->db->select('package_id');
        $this->db->select('tour_cost');
        $this->db->select('meal_cost');
        $this->db->select('participant');
        $this->db->select('description');
        $this->db->select('date');
        $this->db->select('time');
        $this->db->from('tour_reservation');
            
        if($tourid != null){
             $this->db->where("tour_reservation.tour_reservation_id", $tourid);
        }

        $open_list = $this->db->get();
        foreach ($open_list->result() as $open_info) {
            $data[] = $open_info;
        }
        return $data;
    }

    function delete_tour_reservation_list($id) {
        /* $query = $this->db->query('SELECT   tour_reservation_id, reservation_no, package_id,tour_cost ,meal_cost, participant ,description ,date,time  FROM tour_reservation WHERE  tour_reservation_id ='.$id.'');
          $val =  $query->row()->tour_reservation_id;


          if($val ==1)
          {
          return 0;
          }
          else
          {
          $this->db->trans_start(); */

        $this->db->delete('tour_reservation', array('tour_reservation_id' => $id));

        /* $this->db->trans_complete();
          if ($this->db->trans_status() === FALSE)
          return 0;
          else
         */

        return 1;
    }

    function get_feedback() { //get tour reservation list
        $query_str = "SELECT   feedback_id, name, feedback, dateTime   FROM feedback order by dateTime DESC";

        $result = $this->db->query($query_str);

        if ($result->num_rows() > 0) {

            return $result->result_array();
        }
    }

    //   $form1Data['functions']


    function get_available_room_list($tab1Data) {
        $data = array();
        $query_str = "SELECT
      room.room_id,
      room.room_no,
      room.floor_no,
      room_type.type,
      basis.currency,
      basis.ro,
      basis.breakfast,
      basis.lunch,
      basis.dinner
    FROM room
      LEFT JOIN room_type
        ON room.type_id = room_type.type_id
      LEFT JOIN basis
        ON basis.type_id = room_type.type_id
    WHERE room.room_id NOT IN (SELECT
      rr.room_id
    FROM reserved_room rr
      INNER JOIN reservation r
        ON rr.reservation_no = r.reservation_no
    WHERE r.arrival_date >= '" . $tab1Data['datepicker-example7-start'] . "' AND r.depature_date <= '" . $tab1Data['datepicker-example7-end'] . "') AND room.type_id = " . $tab1Data['room_type'] . " AND basis.currency = '" . $tab1Data['currency'] . "'";



        /* SELECT room_no FROM room WHERE room_id NOT IN 
          ( SELECT room_id FROM reserved_room rr JOIN reservation r ON rr.reservation_no = r.reservation_no
          WHERE  `arrival_date` >=  '". $tab1Data['datepicker-example7-start']."'  &&  `depature_date` <=  '". $tab1Data['datepicker-example7-end']."' ) AND type_id = ". $tab1Data['room_type']."";

          $result = $this->db->query($query_str);

          if($result->num_rows() > 0){
          return $result->result_array();
          } */
        $farinn = $this->db->query($query_str);
        foreach ($farinn->result() as $farinn_detail) {
            $data[] = $farinn_detail;
        }
        return $data;
    }
    
    public function banquet_res_details($res_id=null){
        $data = array();
        $this->db->select('banquet_reservation.*');
        $this->db->select('banquet_total_charges.*');
        $this->db->select('function_type.type');
        $this->db->select('banquet.hall_id');
        $this->db->from('banquet_reservation');
        $this->db->join('function_type','banquet_reservation.function_type_id = function_type.function_type_id', 'left');
        $this->db->join('banquet_total_charges','banquet_reservation.banquet_reservation_id = banquet_total_charges.banquet_reservation_id', 'left');
        $this->db->join('banquet','banquet_reservation.banquet_id = banquet.hall_id', 'left');
            
        if($res_id != null){
             $this->db->where("banquet_reservation.banquet_reservation_id", $res_id);
        }

        $open_list = $this->db->get();
        foreach ($open_list->result() as $open_info) {
            $data[] = $open_info;
        }
        return $data;
    }
    
    public function room_res_deatils($res_id=null, $group=null){
        $data = array();
        $this->db->select('reservation.reservation_no');
        $this->db->select('reservation.reservation_status');
        $this->db->select('reservation.arrival_date');
        $this->db->select('reservation.depature_date');
        $this->db->select('reservation.no_of_days');
        $this->db->select('reservation.currency');
        $this->db->select('reservation.basis');
        $this->db->select('person.*');
        $this->db->select('person.country_id');
        $this->db->select('room.room_id');
        $this->db->select('room.room_no');
        $this->db->select('room_type.type');
        $this->db->select('payment.*');
        $this->db->from('reserved_room');
        $this->db->join('reservation','reserved_room.reservation_no = reservation.reservation_no','left');
        $this->db->join('payment','reservation.reservation_no = payment.reservation_no','left');
        $this->db->join('room','reserved_room.room_id = room.room_id','left');
        $this->db->join('room_type','room.type_id = room_type.type_id','left');
        $this->db->join('person','reservation.person_id = person.person_id','left');
        
        if($res_id != null){
             $this->db->where("reservation.reservation_no", $res_id);
        }
        
        if($group != null){
             $this->db->group_by("reservation.reservation_no");
        }
        
        $open_list = $this->db->get();
        foreach ($open_list->result() as $open_info) {
            $data[] = $open_info;
        }
        return $data;
    }
    
    //Common Update
    public function edit_data($table, $id, $where, $data) {
        $this->db->where($where, $id);
        $this->db->update($table, $data);
        return true;
    }
    
    public function delete_data($table, $data) {
        $this->db->delete($table, $data);
        return true;
    }
    
    public function delete_room_data($rmdata) {
            $this->db->trans_start();
            
            $this->db->delete('reserved_room', $rmdata);
            $this->db->delete('payment', $rmdata);
            $this->db->delete('reservation', $rmdata);

            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE)
                return 0;
            else
                return 1;
    }

}
