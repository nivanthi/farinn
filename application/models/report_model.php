<?php

class Report_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

// ---------------------user managemnet reports----------------------------

    function get_users() { //get users
        $data = array();
        $this->db->select('firstname, lastname, email,admin_level,date_created,NIC,phone ');
        $query = $this->db->get('admin');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function get_users_by_level() { //get users by level
        $data = array();
        $this->db->select('firstname, lastname, email,admin_level,date_created,NIC,phone ');
        $this->db->where('admin_level', 1);
        $query = $this->db->get('admin');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

// ---------------------------food & beverage reports------------------------------------

    function get_meal_time_wise_menu_report() { //get batch list first dropdown
        $data = array();
        $this->db->select('firstname, lastname, email,admin_level,date_created,NIC,phone ');
        $this->db->where('admin_level', 1);
        $query = $this->db->get('admin');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function get_meal_info($type, $opt, $code, $name, $filter, $amount) {
        $data = array();

        $query_str = "";

        if ($type == "food") {
            $query_str = "SELECT food_id,food_code,food_name,local_price,foreign_price,description FROM food ";

            if ($opt == "code") {
                $query_str = $query_str . " " . "where food_code like '" . $code . "%'";
            }

            if ($opt == "name") {
                $query_str = $query_str . " " . "where food_name like '" . $name . "%'";
            }

            if ($opt == "local") {
                if ($filter == "e") {
                    $query_str = $query_str . " " . "where local_price = " . $amount . "";
                } elseif ($filter == "gt") {
                    $query_str = $query_str . " " . "where local_price > " . $amount . "";
                } elseif ($filter == "lt") {
                    $query_str = $query_str . " " . "where local_price < " . $amount . "";
                }
            }

            if ($opt == "foreign") {
                if ($filter == "e") {
                    $query_str = $query_str . " " . "where foreign_price = " . $amount . "";
                } elseif ($filter == "gt") {
                    $query_str = $query_str . " " . "where foreign_price > " . $amount . "";
                } elseif ($filter == "lt") {
                    $query_str = $query_str . " " . "where foreign_price < " . $amount . "";
                }
            }
        } elseif ($type == "beverage") {
            $query_str = "SELECT beverage_id,beverage_code,beverage_name,local_price,foreign_price,description FROM beverage ";

            if ($opt == "code") {
                $query_str = $query_str . " " . "where beverage_code like '" . $code . "%'";
            }

            if ($opt == "name") {
                $query_str = $query_str . " " . "where beverage_name like '" . $name . "%'";
            }


            if ($opt == "local") {
                if ($filter == "e") {
                    $query_str = $query_str . " " . "where local_price = " . $amount . "";
                } elseif ($filter == "gt") {
                    $query_str = $query_str . " " . "where local_price > " . $amount . "";
                } elseif ($filter == "lt") {
                    $query_str = $query_str . " " . "where local_price < " . $amount . "";
                }
            }

            if ($opt == "foreign") {
                if ($filter == "e") {
                    $query_str = $query_str . " " . "where foreign_price = " . $amount . "";
                } elseif ($filter == "gt") {
                    $query_str = $query_str . " " . "where foreign_price > " . $amount . "";
                } elseif ($filter == "lt") {
                    $query_str = $query_str . " " . "where foreign_price < " . $amount . "";
                }
            }
        }


        $result = $this->db->query($query_str);

        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $row) {
                $data[] = $row;
            }
        }
        $result->free_result();
        return $data;
    }

    function get_foodInfo() { //get food info
        $data = array();
        $this->db->select(' distinct(food_name)  ');
        $query = $this->db->get('food');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function get_beverageInfo() { // get_beverageInfo list first dropdown
        $data = array();
        $this->db->select(' distinct(beverage_name)  ');
        $query = $this->db->get('beverage');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    //-----------------------banquet information report-----------------------------------------

    function get_Banquet_Reservation($res_id) {

        $query_str = " SELECT CONCAT('#BNQT - R', br.banquet_reservation_id) as resNo, customer, contact, type,  date, time, guest_count, grand_total, balance_after_first_pay , pay_complete,
						menu_no , local_price ,hall_name
						 FROM banquet_reservation br join  function_type ft 
						 on br.function_type_id = ft.function_type_id
						 join banquet_total_charges btc 
						 on btc.banquet_reservation_id = br.banquet_reservation_id 
						 join banquet_menu bm
						 on br.	banquet_menu_id = bm.menu_id
						 join banquet b 
						 on b.hall_id = br.banquet_id
						 WHERE br.banquet_reservation_id = ?";

        $result = $this->db->query($query_str, array($res_id));
        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }

    function get_Banquet_Reservation_extra_charges($res_id) {

        $query_str = " SELECT    liqueur ,  poruwa ,  musicGroup ,  dancingGroup ,  flowerArrengement ,  cakeStructure 
						FROM  banquet_extra   WHERE banquet_reservation_id = ?";
        $result = $this->db->query($query_str, array($res_id));

        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }

    function get_Banquet_Reservation_other_charges($res_id) {

        $query_str = " SELECT  description ,  cost  FROM  banquet_other_charges 
						WHERE banquet_reservation_id = ?";
        $result = $this->db->query($query_str, array($res_id));

        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else
            false;
    }

    function get_Banquet_Reservation_menu_charges($res_id) {

        $query_str = " SELECT  descrip ,  quantity ,  unit_price  FROM  banquet_menu_request
						WHERE banquet_reservation_id = ?";

        $result = $this->db->query($query_str, array($res_id));

        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else
            false;
    }

    function get_Banquet_Reservation_charges($res_id) {

        $query_str = " SELECT   banquet_reservation_id ,  banquet_charge ,  extra_facility_charge ,  menu_request_charge ,  other_charge ,  sub_total ,  discount ,  dis_ammount ,  nbt_rate ,  nbt_ammount ,  vat_rate ,  vat_ammount ,  grand_total ,  first_payment ,  first_pay_date ,  balance_after_first_pay ,  final_payment ,  final_pay_date ,  pay_complete 
					FROM  banquet_total_charges  WHERE banquet_reservation_id = ?";
        $result = $this->db->query($query_str, array($res_id));

        if ($result->num_rows() > 0) {
            return $result->result_array();
        }
    }

    //----------------------------room information report---------------------------------------

    function get_roomType_Charges_wise_report_foreign() { //get room type charges by forgein price wise report
        $query_str = "SELECT  rt.type, b.ro, b.breakfast , b.lunch, b.dinner , b.ro + b.breakfast As bb,  b.ro + b.breakfast + b.lunch As hb,  b.ro + b.breakfast + b.lunch + b.dinner As fb FROM room_type rt  join room r on r.type_id = rt.type_id join basis b on b.type_id = rt.type_id where b.currency='foreign' group by b.ro";
        $result = $this->db->query($query_str);

        if ($result->num_rows() > 0) {

            return $result->result_array();
        }
    }

    function get_roomType_Charges_wise_report_local() { //get room type charges by localprice wise report
        $query_str = "SELECT  rt.type, b.ro, b.breakfast , b.lunch, b.dinner , b.ro + b.breakfast As bb,  b.ro + b.breakfast + b.lunch As hb,  b.ro + b.breakfast + b.lunch + b.dinner As fb FROM room_type rt  join room r on r.type_id = rt.type_id join basis b on b.type_id = rt.type_id where b.currency='local' group by b.ro";
        $result = $this->db->query($query_str);

        if ($result->num_rows() > 0) {

            return $result->result_array();
        }
    }

    function get_suit_rooms() { //get suite room numbers
        $query_str = "SELECT   r.room_no , rt.type FROM room_type rt join room r on r.type_id = rt.type_id where r.type_id='1' ";

        $result = $this->db->query($query_str);

        if ($result->num_rows() > 0) {

            return $result->result_array();
        }
    }

    function get_delux_rooms() { //get delux room numbers
        $query_str = "SELECT   r.room_no , rt.type FROM room_type rt join room r on r.type_id = rt.type_id where r.type_id='2' ";

        $result = $this->db->query($query_str);

        if ($result->num_rows() > 0) {

            return $result->result_array();
        }
    }

    function get_standard_rooms() { //get standard room numbers
        $query_str = "SELECT   r.room_no , rt.type FROM room_type rt join room r on r.type_id = rt.type_id where r.type_id='3' ";

        $result = $this->db->query($query_str);

        if ($result->num_rows() > 0) {

            return $result->result_array();
        }
    }
	
// ---------------------------Reservation reports------------------------------------
	public function reservation_deatils($status=null, $country=null, $ara_date=null, $dep_date=null, $tot=null){
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
		$this->db->select('country_t.short_name');
		//if($tot != null){$this->db->select_sum('payment.grand_total', 'totRs');}
		
		$this->db->from('reserved_room');
		$this->db->join('reservation','reserved_room.reservation_no = reservation.reservation_no','left');
		$this->db->join('payment','reservation.reservation_no = payment.reservation_no','left');
		$this->db->join('room','reserved_room.room_id = room.room_id','left');
		$this->db->join('room_type','room.type_id = room_type.type_id','left');
		$this->db->join('person','reservation.person_id = person.person_id','left');
		$this->db->join('country_t','person.country_id = country_t.country_id','left');
		
		if($status != null){
			 $this->db->where("reservation.reservation_status", $status);
		}
		
		if($country != null){
			 $this->db->where("person.country_id", $country);
		}
		
		if($ara_date != null && $dep_date != null){
			$this->db->where("(reservation.arrival_date >= '" . $ara_date . "' AND reservation.depature_date <= '" . $dep_date . "')");
		}
		
		if($tot != null){
			$this->db->group_by("reservation.arrival_date");
			$this->db->group_by("reservation.depature_date");
		}else{
			$this->db->group_by("reservation.reservation_no");
		}
		
		$open_list = $this->db->get();
        foreach ($open_list->result() as $open_info) {
            $data[] = $open_info;
        }
        return $data;
	}
	
	function available_room_list($strat_date, $end_date) {
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
			WHERE r.arrival_date >= '" . $strat_date . "' AND r.depature_date <= '" .$end_date. "')";
	
	    $farinn = $this->db->query($query_str);
        foreach ($farinn->result() as $farinn_detail) {
            $data[] = $farinn_detail;
        }
        return $data;
	}
	
}
