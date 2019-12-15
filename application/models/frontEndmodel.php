
<?php

/*
  /***************************************
 * Author : Nivanthi
 * Created Date: 2015-07-25
 * Description: front end model
 * ************************************** */

class frontEndmodel extends CI_Model {

    function _construct() {
        parent::_construct();
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

    public function save_data($table, $data) {//save feedback
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function save_feedback($data) {//save feedback
        $this->db->insert('feedback', $data);
    }

    public function save_b_inquries($data) {//save banquet inquries
        $this->db->insert('banquet_inquires', $data);
    }

    public function get_roomPrice_suite() {//get room price#suite+check varible in controler#room
        $query_str = "SELECT ro FROM basis where type_id=1 and currency='foreign'";
        $result = $this->db->query($query_str);
        if ($result->num_rows() == 1)
            return $result->row(0)->ro;
        else
            return FALSE;
    }

    public function get_roomPrice_dilux() {//get room price#delux
        $query_str = "SELECT ro FROM basis where type_id=2 and currency='foreign'";
        $result = $this->db->query($query_str);
        if ($result->num_rows() == 1)
            return $result->row(0)->ro;
        else
            return FALSE;
    }

    public function get_roomPrice_standard() {//get room price#standard
        $query_str = "SELECT ro FROM basis where type_id=3 and currency='foreign'";
        $result = $this->db->query($query_str);
        if ($result->num_rows() == 1)
            return $result->row(0)->ro;
        else
            return FALSE;
    }

    //get available room list to front page



    function get_available_room_list($tab1Data) {

        $query_str = "SELECT room_no FROM room WHERE room_id NOT IN 
				( SELECT room_id FROM reserved_room rr JOIN reservation r ON rr.reservation_no = r.reservation_no 
				WHERE  `arrival_date` >=  '" . $tab1Data['arrival_date'] . "'  &&  `depature_date` <=  '" . $tab1Data['departure_date'] . "' ) ";

        $result = $this->db->query($query_str);

        if ($result->num_rows() > $tab1Data['room_count']) {

            //return $result->result_array();
            return 1;
        } else
            return 0;
    }

//get basis and prices for rooms

    public function get_suite_basis_price() {//get room price#suite+check varible in controler#reservation
        $query_str = "SELECT currency,ro,breakfast,lunch,dinner FROM basis where type_id=1 and currency='foreign'";
        $result = $this->db->query($query_str);
        if ($result->num_rows() > 0)
            return $result->result_array();
        //return $result->row(0)->ro;
        else
            return FALSE;
    }

    public function get_standard_basis_price() {//get room price#standard+check varible in controler#reservation
        $query_str = "SELECT currency,ro,breakfast,lunch,dinner FROM basis where type_id=3 and currency='foreign'";
        $result = $this->db->query($query_str);
        if ($result->num_rows() > 0)
            return $result->result_array();
        //return $result->row(0)->ro;
        else
            return FALSE;
    }

    public function get_delux_basis_price() {//get room price#delux+check varible in controler#reservation
        $query_str = "SELECT currency,ro,breakfast,lunch,dinner FROM basis where type_id=2 and currency='foreign'";
        $result = $this->db->query($query_str);
        if ($result->num_rows() > 0)
            return $result->result_array();
        //return $result->row(0)->ro;
        else
            return FALSE;
    }

}
