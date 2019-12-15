<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// To load pages of the web site

class Backend_controller extends Auth_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->load->model('user_model');
    }

    //login views

    public function index() {
        if (isset($_SESSION['is_logged_in']) and $_SESSION['level'] == 'Administrator') {

            $this->load->view('Backend/AdminViews/admin_dashboard_view');
            // Admin login view

        } elseif (isset($_SESSION['is_logged_in']) and $_SESSION['level'] == 'Front Officer') {

             $this->load->view('Backend/FrontOfficeViews/f_dashboard_view');
            //Front Office login view
        }
    }

    // admin profile view

     public function load_profile() {

        $login_id = $_SESSION['user_id'];
        $data['profile'] = $this->user_model->get_profile($login_id);

        $this->load->view('Backend/AdminViews/admin_profile_view', $data);
    }
    
    // front officer profile view

    public function f_load_profile() {

        $login_id = $_SESSION['user_id'];
        $data['profile'] = $this->user_model->get_profile($login_id);

        $this->load->view('Backend/FrontOfficeViews/front_officer_profile_view', $data);
    }

    //admin master table list view

    public function load_lists() {


        $data['path_name'] = 'User List';
        $data['title'] = "Master Table List";

        $this->load->view('Backend/AdminViews/admin_lists', $data);
    }

//-----------------------------------------------------------------------------------------------------------
//--------------------------------------GROCERY CRUD --------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------


// user module

    public function _set_output($output = null) {

        if ($_SESSION['is_logged_in'] = TRUE and $_SESSION['level'] == 'Administrator') {
            $this->load->view('BackEnd/AdminViews//admin_crud_output_view', $output);
        }
    }

    public function user_management() {
        $crud = new grocery_CRUD();

        $crud->set_table('admin');
        $crud->columns('firstname', 'lastname', 'email', 'admin_level', 'date_created', 'NIC', 'phone', 'photo');

        $crud->field_type('admin_level', 'dropdown', array('1' => 'Supper Admin', '2' => 'Front Office Level'));

        $crud->set_field_upload('photo', 'assets/BackEnd/images/users');
        $crud->set_rules('email', 'Email', 'required|trim|valid_email|max_length[255]');
        $crud->set_rules('phone', 'phone', 'callback_phone_check');
        $crud->set_rules('NIC', 'NIC', 'callback_nic_check');

        $crud->required_fields('admin_id', 'firstname', 'lastname', 'email', 'password', 'admin_level');
        $crud->fields('firstname', 'lastname', 'email', 'NIC', 'phone', 'admin_level', 'photo', 'password');

        $md5_password = md5('Admin@1990');
        $crud->field_type('password', 'hidden', $md5_password);

        $crud->add_action('Password Change', base_url('/Assets/BackEnd/images/password_icon.png'), '', '', array($this, 'password_change'));

        $output = $crud->render();

        $data['path'] = $this->uri->segment(2);
        $data['path_name'] = 'User List';
        $data['title'] = "User Information";
        $output->data = $data;

        $this->_set_output($output);
    }

    public function nic_check($nic) {

        if (!ereg("^[0-9]{9}[V|v]$", $nic) && $nic != null) {
            $this->form_validation->set_message('nic_check', 'NIC not in Valid Format. Valid format is 000000000V (9 numbers and V)');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function phone_check($phone) {

        if (!ereg("^[0-9]{10}$", $phone) && $phone != null) {
            $this->form_validation->set_message('phone_check', 'Phone Number not in Valid Format.. Valid format is 0000000000 (10 numbers)');

            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function password_change($primary_key, $row) {
        return "call_password_change_view/" . $row->admin_id;
    }

    public function call_password_change_view() {
        $data['admin_id'] = $this->uri->segment(3);
        $data['path'] = $this->uri->segment(2);
        $data['path_name'] = 'Password Change';
        $data['title'] = "Password Change";
        $this->load->view('BackEnd/AdminViews/admin_change_password_view', $data);
    }

    public function update_password_change() {
        $newpw = $this->input->post('newpw', TRUE);
        $md5_password = md5($newpw);
        $id = $this->input->post('id', TRUE);
        $result = $this->user_model->update_password($md5_password, $id);
    }

// end of user module

// admin room managemnet module

    public function load_room_view() {
        $this->load->view('BackEnd/AdminViews/admin_room_management_view');
    }

    public function room_type_management() {
        $crud = new grocery_CRUD();
        $crud->set_table('room_type');
        $crud->columns('type', 'description');
        $crud->set_subject('Room Type');
        $output = $crud->render();

        $data['path'] = $this->uri->segment(2);
        $data['path_name'] = 'Room Type List';
        $data['title'] = "Room Type Information";
        $output->data = $data;
        $this->_set_output($output);
    }

    public function room_basis_management() {
        $crud = new grocery_CRUD();

        $crud->set_table('basis');


        $crud->display_as('type_id', 'Room Type')
                ->display_as('ro', 'Room Only')
                ->display_as('breakfast', 'Breakfast')
                ->display_as('lunch', 'Lunch')
                ->display_as('dinner', 'Dinner');

        $crud->field_type('currency', 'dropdown', array('local' => 'Local (Rs.)', 'foreign' => 'Foreign ($.)'));
        $crud->set_relation('type_id', 'room_type', 'type');

        $crud->set_subject('Room Basis');
        $output = $crud->render();

        $data['path'] = $this->uri->segment(2);
        $data['path_name'] = 'Room Basis List';
        $data['title'] = "Room Basis Information";

        $output->data = $data;
        $this->_set_output($output);
    }

    public function room_management() {
        $crud = new grocery_CRUD();

        $crud->set_table('room');
        $crud->columns('type_id', 'room_no', 'floor_no', 'description');
        $crud->display_as('floor_no', 'Floor');
        $crud->display_as('type_id', 'Room Type');

        $crud->field_type('floor_no', 'dropdown', array('1' => '1', '2' => '2'));
        $crud->required_fields('room_no', 'floor_no', 'type_id');
        $crud->fields('type_id', 'room_no', 'floor_no', 'description');
        $crud->set_relation('type_id', 'room_type', 'type');

        $output = $crud->render();

        $data['path'] = $this->uri->segment(2);
        $data['path_name'] = 'Room List';
        $data['title'] = "Room Information";
        $output->data = $data;

        $this->_set_output($output);
    }

    // get available room details

    public function get_room_availability() {
        parse_str($this->input->post('tab1Data', TRUE), $tab1Data);
        $available_rooms = $this->user_model->get_available_room_list($tab1Data);
        
        $ref_no = $_POST['refno'];
        if($ref_no > 0){
            $res = $this->user_model->room_res_deatils($ref_no);
            
            $str ="";
            $str .="<table class='table table-bordered table-striped table-actions'>
                      <tr>
                        <td><strong>Select</strong></td>
                        <td><strong>Room Number</strong></td>
                        <td><strong>Floor</strong></td>
                        <td><strong>Room Type</strong></td>
                        <td><strong>Room Charges</strong></td>
                      </tr>";
                    $v=0;
                    foreach($available_rooms as $rm){  
                        if($tab1Data['basis'] == 'RO'){$rm_charges = $rm->ro;
                        }else if($tab1Data['basis'] == 'BB'){ $rm_charges = ($rm->ro + $rm->breakfast);
                        }else if($tab1Data['basis'] == 'HB'){ $rm_charges = ($rm->ro + $rm->breakfast + $rm->lunch);
                        }else if($tab1Data['basis'] == 'FB'){ $rm_charges = ($rm->ro + $rm->breakfast + $rm->lunch + $rm->dinner);}
                    
                    if($res[0]->room_id == $rm->room_id){ $stat = "checked=''";}else{$stat = "";}
            $str .="<tr>
                        <td><input name='sel_room[]' type='checkbox' value='".$rm->room_id."' ".$stat." /></td>
                        <td>".$rm->room_no."</td>
                        <td>".$rm->floor_no."</td>
                        <td>".$rm->type."</td>
                        <td>".$rm_charges."</td>
                      </tr>";
                      $v++;
                    }
            $str .="</table>";
        }else{
            //echo "<pre>";
            //print_r($available_rooms); //print an array
            //echo "</pre>";
            //die;
            $str ="";
            $str .="<table class='table table-bordered table-striped table-actions'>
                      <tr>
                        <td><strong>Select</strong></td>
                        <td><strong>Room Number</strong></td>
                        <td><strong>Floor</strong></td>
                        <td><strong>Room Type</strong></td>
                        <td><strong>Room Charges</strong></td>
                      </tr>";
                    foreach($available_rooms as $rm){  
                    if($tab1Data['basis'] == 'RO'){$rm_charges = $rm->ro;
                    }else if($tab1Data['basis'] == 'BB'){ $rm_charges = ($rm->ro + $rm->breakfast);
                    }else if($tab1Data['basis'] == 'HB'){ $rm_charges = ($rm->ro + $rm->breakfast + $rm->lunch);
                    }else if($tab1Data['basis'] == 'FB'){ $rm_charges = ($rm->ro + $rm->breakfast + $rm->lunch + $rm->dinner);}
            $str .="<tr>
                        <td><input name='sel_room[]' type='checkbox' value='".$rm->room_id."' /></td>
                        <td>".$rm->room_no."</td>
                        <td>".$rm->floor_no."</td>
                        <td>".$rm->type."</td>
                        <td>".$rm_charges."</td>
                      </tr>";
                    }
            $str .="</table>";
        }
        
        echo $str;
    }

    // save reserved room details

    public function save_room_reservations() {

        parse_str($this->input->post('tab1Data', TRUE), $tab1Data);
        //parse_str($this->input->post('tab2Data',TRUE), $form2Data);
        //parse_str($this->input->post('tab3Data',TRUE), $form3Data);
        //$menuRows = $this->input->post('menuRowCount',TRUE);  
        //$otherChargeRows = $this->input->post('otherChargeRowCount',TRUE);
        //$sub = $this->input->post('sub',TRUE);    
        //$grand =$this->input->post('grand',TRUE); 
        //$bal = $this->input->post('bal',TRUE);    
        //$result = $this->user_model->save_banquet_reservation($form1Data, $form2Data, $menuRows,$form3Data, 
        //  $otherChargeRows,$sub, $grand, $bal);
        //echo $result;

        echo "<pre>";
        print_r($tab1Data); //print an array
        echo "</pre>";
    }

// end of admin room managemnet module

// admin food and beverage managemnet module

    public function food_management() {
        $crud = new grocery_CRUD();

        $crud->set_table('food');
        $crud->columns('food_code', 'food_name', 'local_price', 'foreign_price', 'meal', 'description');
        //http://www.grocerycrud.com/documentation/options_functions/set_relation_n_n

        $crud->display_as('foreign_price', 'Foreign Price ($. )');
        $crud->display_as('local_price', 'Local Price (Rs. )');
        $crud->set_rules('foreign_price', 'foreign_price', 'numeric');
        $crud->set_rules('local_price', 'local_price', 'numeric');

        $crud->set_relation_n_n('meal', 'meal_time_food', 'meal_time', 'food_id', 'meal_time_id', 'meal_time_name');
        $crud->fields('food_code', 'food_name', 'local_price', 'foreign_price', 'meal', 'description');
        $crud->required_fields('food_code', 'food_name', 'local_price', 'foreign_price', 'meal');

        $output = $crud->render();

        $data['path'] = $this->uri->segment(2);
        $data['path_name'] = 'Food List';
        $data['title'] = "Food Information";
        $output->data = $data;

        $this->_set_output($output);
    }

    public function beverage_management() {
        $crud = new grocery_CRUD();

        $crud->set_table('beverage');
        $crud->columns('beverage_code', 'beverage_name', 'local_price', 'foreign_price', 'description');

        $crud->display_as('foreign_price', 'Foreign Price ($. )');
        $crud->display_as('local_price', 'Local Price (Rs. )');
        $crud->set_rules('foreign_price', 'foreign_price', 'numeric');
        $crud->set_rules('local_price', 'local_price', 'numeric');

        $crud->required_fields('beverage_code', 'beverage_name', 'local_price', 'foreign_price');
        $crud->fields('beverage_code', 'beverage_name', 'local_price', 'foreign_price', 'description');

        $output = $crud->render();

        $data['path'] = $this->uri->segment(2);
        $data['path_name'] = 'Beverage List';
        $data['title'] = "Beverage Information";
        $output->data = $data;

        $this->_set_output($output);
    }
// end of food and beverage managment module

// guest management module

    public function guest_management() {
        $crud = new grocery_CRUD();

        $crud->set_table('person');
        $crud->columns('title', 'f_name', 'l_name', 'name_no', 'address_1', 'address_2', 'city', 'country_id', 'phone', 'email', 'vehical_no');

        $crud->display_as('f_name', 'First Name')
                ->display_as('l_name', 'Last Name')
                ->display_as('name_no', 'Address #')
                ->display_as('country_id', 'Country');

        $crud->set_rules('email', 'Email', 'trim|valid_email|max_length[255]');

        $crud->required_fields('f_name', 'phone', 'email');

        $crud->field_type('title', 'dropdown', array('Mr.' => 'Mr.', 'Miss.' => 'Miss.', 'Mrs.' => 'Mrs.'));

        $crud->set_relation('country_id', 'country_t', '{iso2} - {short_name}');

        $output = $crud->render();

        $data['path'] = $this->uri->segment(2);
        $data['path_name'] = 'Guest List';
        $data['title'] = "Gust Information";
        $output->data = $data;

        $this->_set_output($output);
    }

    public function admin_load_inhouse_guest_List() { //admin_load_inhouse_guest_List   
        $this->load->view('BackEnd/AdminViews/admin_load_inhouse_guest__List');
    }


// end of guest management module

//room reservation module

    //add reservation by admin view

    public function admin_add_room_reservaion_details() {
        $data['countries'] = $this->user_model->get_countries();
        $data['room_type'] = $this->user_model->get_room_type();

        $aDate = $this->input->post('datepicker-example7-start');
        $dDate = $this->input->post('datepicker-example7-end');

        if (($aDate != false) | ($dDate != false)) {
            $data['arrival'] = DateTime::createFromFormat('y/m/d', $aDate)->format('Y-M-d');
            $data['depature'] = DateTime::createFromFormat('y/m/d', $dDate)->format('Y-M-d');
        }

        $data['diff'] = (abs(strtotime($dDate) - strtotime($aDate))) / (60 * 60 * 24);

        $this->load->view('BackEnd/AdminViews/admin_roomreservation_add_view', $data);
    }

    //add reservation by frontofficer view

    public function f_add_room_reservaion_details() {
        $data['countries'] = $this->user_model->get_countries();
        $data['room_type'] = $this->user_model->get_room_type();

        $aDate = $this->input->post('datepicker-example7-start');
        $dDate = $this->input->post('datepicker-example7-end');

        if (($aDate != false) | ($dDate != false)) {
            $data['arrival'] = DateTime::createFromFormat('y/m/d', $aDate)->format('Y-M-d');
            $data['depature'] = DateTime::createFromFormat('y/m/d', $dDate)->format('Y-M-d');
        }

        $data['diff'] = (abs(strtotime($dDate) - strtotime($aDate))) / (60 * 60 * 24);

        $this->load->view('BackEnd/FrontOfficeViews/f_roomreservation_add_view', $data);
    }
    
    // save room reservation details to db

    public function save_room_reservation(){
        $this->load->model('user_model');
        parse_str($this->input->post('tab1Data', TRUE), $form1Data);
        parse_str($this->input->post('tab2Data', TRUE), $form2Data);
        parse_str($this->input->post('tab3Data', TRUE), $form3Data);
        parse_str($this->input->post('tab4Data', TRUE), $form4Data);
        
        //Form 1 Data
            $arrival_date = date("Y-m-d", strtotime($form1Data['datepicker-example7-start']));
            $depature_date = date("Y-m-d", strtotime($form1Data['datepicker-example7-end']));

            if($form1Data['currency'] == 'local'){ $currency = 'LKR';}else{$currency = 'USD';}

            $basic_details = array(
                'reservation_status' => $form1Data['status'],
                'arrival_date' => $arrival_date,
                'depature_date' => $depature_date,
                'no_of_days' => $form1Data['date_diff'],
                'currency' => $currency,
                'basis' => $form1Data['basis'],
                'room_type' => $form1Data['room_type'],
            );
            $form1 = $this->user_model->save_room_reservation($basic_details, 'reservation');//Remove ones complete #main
        //End form one data
            
        //Form 2 data
            $x=count($form2Data['sel_room']);
            for($c=0;$c<$x;$c++){
                $taken_rrom = $form2Data['sel_room'][$c];
                $room_booking = array('reservation_no' => $form1, 'room_id' => $taken_rrom);
                $form2 = $this->user_model->save_room_reservation($room_booking, 'reserved_room');
            }
        //End form two data
        
        //Form 3 data
            $person_info = array('title' => $form3Data['title'], 'f_name' => $form3Data['fname'], 'l_name' => $form3Data['lname'], 
            'Nic-Passport' => $form3Data['nic'], 'address_1' => $form3Data['add1'], 'address_2' => $form3Data['add2'],'city' => $form3Data['city'], 
            'country_id' => $form3Data['country'], 'phone' => $form3Data['contact'], 'email' => $form3Data['email']);
            $form3 = $this->user_model->save_room_reservation($person_info, 'person');
            
            $update_person = array('person_id' => $_POST['$form3']);
            $this->user_model->edit_data('reservation',$form1,'reservation_no',$update_person);
        
        if($form3Data['optionsRadios'] == 'option2'){
            $company_info = array('company_name' => $form3Data['company_name'], 'contact_person' => $form3Data['company_person'], 'ContactNo' => $form3Data['company_contact_no'],
            'CompanyAddress' => $form3Data['company_address']);
            $form3_1 = $this->user_model->save_room_reservation($company_info, 'company');
        }
        //End form three data
        
        //For 4 data
            $payment_info = array('reservation_no' => $form1, 'room_charges' => $form4Data['roomcharge'], 'meal_charges' => $form4Data['othercharge'], 
                                  'total_charges' => $form4Data['totalcharge'], 'discount' => $form4Data['discount'], 
                                  'discount_amount' => $form4Data['discountamount'], 'nbt' => $form4Data['nbt'], 
                                  'vat' => $form4Data['vat'], 'grand_total' => $form4Data['grandtotal'], 
                                  'advance' => $form4Data['advance'], 'balance' => $form4Data['balance'], 
                                  'payement_date' => $form4Data['payment_date'], 'payement_method' => $form4Data['payment_method']);
            $form4 = $this->user_model->save_room_reservation($payment_info, 'payment');
        
            if($form4Data['payment_method'] == 'Cheque'){
                $cheque_info = array('payment_id' => $form4, 'cheque_no' => $form4Data['cheque_no'], 'cheque_date' => $form4Data['cheque_date']);
                $form4_1 = $this->user_model->save_room_reservation($cheque_info, 'cheque');
            }
        //End form four data
        
        echo "1";

        /* echo "<pre>";
          print_r($form3Data); //print an array
          echo "</pre>" */
    }
    
      // reserved room list by admin view

    public function reserved_room_list(){
        $data = array();
        $res_data = $this->user_model->room_res_deatils('', 'group');
        
        $data['rrs_data']= $res_data;
        $this->load->view('BackEnd/AdminViews/room_reservation_list', $data);
    }

    // reserved room list by frontofficer view

    public function f_reserved_room_list(){
        $data = array();
        $res_data = $this->user_model->room_res_deatils('', 'group');
        
        $data['rrs_data']= $res_data;
        $this->load->view('BackEnd/FrontOfficeViews/f_room_reservation_list', $data);
    }
    
    // edit room reservation by admin view

    public function edit_room_reservation(){
        $data = array();
        $id = $this->uri->segment(3);
        $res_data = $this->user_model->room_res_deatils($id);
        $data['countries'] = $this->user_model->get_countries();
        $data['room_type'] = $this->user_model->get_room_type();

        //print_r($res_data);
        $data['resv'] = $res_data;
        $this->load->view('BackEnd/AdminViews/edit_room_reservation', $data);
    }
    
    // edit room reservation by front officer view

    public function f_edit_room_reservation(){
        $data = array();
        $id = $this->uri->segment(3);
        $res_data = $this->user_model->room_res_deatils($id);
        $data['countries'] = $this->user_model->get_countries();
        $data['room_type'] = $this->user_model->get_room_type();

        //print_r($res_data);
        $data['resv'] = $res_data;
        $this->load->view('BackEnd/FrontOfficeViews/f_edit_room_reservation', $data);
    }

    public function update_room_reservation(){
        $data = array();
        $this->load->model('user_model');
        parse_str($this->input->post('tab1Data', TRUE), $form1Data);
        parse_str($this->input->post('tab2Data', TRUE), $form2Data);
        parse_str($this->input->post('tab3Data', TRUE), $form3Data);
        parse_str($this->input->post('tab4Data', TRUE), $form4Data);
        
        $ref_no = $form1Data['ref_no'];
        
        //Update Form 1 Data
        $arrival_date = date("Y-m-d", strtotime($form1Data['datepicker-example7-start']));
            $depature_date = date("Y-m-d", strtotime($form1Data['datepicker-example7-end']));

            if($form1Data['currency'] == 'local'){ $currency = 'LKR';}else{$currency = 'USD';}

            $basic_details = array(
                'reservation_status' => $form1Data['status'],
                'arrival_date' => $arrival_date,
                'depature_date' => $depature_date,
                'no_of_days' => $form1Data['date_diff'],
                'currency' => $currency,
                'basis' => $form1Data['basis'],
                'room_type' => $form1Data['room_type'],
            );
            
        $this->user_model->edit_data('reservation', $ref_no, 'reservation_no', $basic_details);
        //End form one data
        
        //Update Form 2 data
            //Delete all exisiting rooms
            $remove_res = array('reservation_no' => $ref_no);
            $this->user_model->delete_data('reserved_room');
            
            //Insert new records
            $x=count($form2Data['sel_room']);
            for($c=0;$c<$x;$c++){
                $taken_rrom = $form2Data['sel_room'][$c];
                $room_booking = array('reservation_no' => $ref_no, 'room_id' => $taken_rrom);
                $form2 = $this->user_model->save_room_reservation($room_booking, 'reserved_room');
            }
        //End form two data
        
        //Update Form 3 data
            $person_info = array('title' => $form3Data['title'], 'f_name' => $form3Data['fname'], 'l_name' => $form3Data['lname'], 
            'Nic-Passport' => $form3Data['nic'], 'address_1' => $form3Data['add1'], 'address_2' => $form3Data['add2'],'city' => $form3Data['city'], 
            'country_id' => $form3Data['country'], 'phone' => $form3Data['contact'], 'email' => $form3Data['email']);
            $this->user_model->edit_data('person', $form3Data['person_id'], 'person_id', $person_info);
        //End form three data
        
        //Update Form 4 data
            $payment_info = array('room_charges' => $form4Data['roomcharge'], 'meal_charges' => $form4Data['othercharge'], 
                                  'total_charges' => $form4Data['totalcharge'], 'discount' => $form4Data['discount'], 
                                  'discount_amount' => $form4Data['discountamount'], 'nbt' => $form4Data['nbt'], 
                                  'vat' => $form4Data['vat'], 'grand_total' => $form4Data['grandtotal'], 
                                  'advance' => $form4Data['advance'], 'balance' => $form4Data['balance'], 
                                  'payement_date' => $form4Data['payment_date'], 'payement_method' => $form4Data['payment_method']);
            $this->user_model->edit_data('payment', $ref_no, 'reservation_no', $payment_info);
        
            if($form4Data['payment_method'] == 'Cheque'){
                $cheque_info = array('payment_id' => $form4, 'cheque_no' => $form4Data['cheque_no'], 'cheque_date' => $form4Data['cheque_date']);
                $this->user_model->edit_data('cheque', $form4Data['payment_id'], 'payment_id', $cheque_info);
            }
        //End form four data
        
        echo "1";
    }
    
    //Ajax
    public function delete_room_reservations() {
        $delete_dta = array('reservation_no' => $_POST['resId']);
        
        $result = $this->user_model->delete_room_data($delete_dta);

        echo $result;
    }
    
//End room reservation module 

// banquet management module

    public function banquet_menu_management() {
        $crud = new grocery_CRUD();

        $crud->set_table('banquet_menu');
        $crud->columns('menu_id', 'local_price', 'menu_no', 'menu_description', 'service_charges');

        $crud->display_as('local_price', 'Price (Rs.)')
                ->display_as('menu_no', 'Menu No')
                ->display_as('menu_description', 'Menu Description')
                ->display_as('service_charges', 'Service Charges (%)');


        $output = $crud->render();

        $data['path'] = $this->uri->segment(2);
        $data['path_name'] = 'Banquet Menu List';
        $data['title'] = "Banquet Menu Information";
        $output->data = $data;

        $this->_set_output($output);
    }

    public function banquet_hall_management() {
        $crud = new grocery_CRUD();

        $crud->set_table('banquet');
        $crud->columns('hall_name', 'FLOOR', 'capacity', 'sqr_meters');


        $crud->display_as('hall_name', 'Name of the Hall')
                ->display_as('FLOOR', 'Fllor')
                ->display_as('capacity', 'No. Of Guests')
                ->display_as('sqr_meters', 'Area (Square Meters)');


        $output = $crud->render();

        $data['path'] = $this->uri->segment(2);
        $data['path_name'] = 'Banquet Hall List';
        $data['title'] = "Banquet Hall Information";
        $output->data = $data;

        $this->_set_output($output);
    }

    public function banquet_function_management() {
        $crud = new grocery_CRUD();

        $crud->set_table('banquet_request');
        $crud->columns('contancName', 'contact_no', 'email', 'date_of_function', 'no_of_guest', 'time', 'no.of_hours', 'hall_id', 'menu_id');

        $crud->display_as('hall_id', 'Hall')
                ->display_as('menu_id', 'Menu')
                ->display_as('name', 'Contact Person ')
                ->display_as('date_of_function', 'Date of Funtion')
                ->display_as('function_type_id', 'Funtion Type')
                ->display_as('time', 'Time')
                ->display_as('no.of_hours', 'No.of Hours');


        $crud->set_relation('function_type_id', 'function_type', 'type');
        $crud->set_relation('hall_id', 'banquet', 'hall_name');
        $crud->set_relation('menu_id', 'banquet_menu', '	menu_no');

        $crud->fields('hall_id', 'menu_id', 'name', 'contact_no', 'email', 'function_type_id', 'no_of_guest', 'date_of_function', 'time', 'no.of_hours');

        $crud->field_type('time', 'dropdown', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12', '13' => '13', '14' => '14', '15' => '15', '16' => '16', '17' => '17', '18' => '18', '19' => '19', '20' => '20', '21' => '21', '22' => '22', '23' => '23', '24' => '24'));
        $crud->field_type('no.of_hours', 'dropdown', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12'));


        $output = $crud->render();

        $data['path'] = $this->uri->segment(2);
        $data['path_name'] = 'Banquet Functions list';
        $data['title'] = "Banquet Function ";
        $output->data = $data;

        $this->_set_output($output);
    }

    // add banquet reservation by admin view

    public function function_management_add() {
        $data['event'] = $this->user_model->get_EventList();
        $data['banquet'] = $this->user_model->get_BanquetList();
        $data['menu'] = $this->user_model->get_BanquetMenu();

        $data['path_name'] = 'User List';
        $data['title'] = "Master Table List";

        $this->load->view('Backend/AdminViews/admin_function_add_view', $data);
    }

    // add banquet reservation by front officer view

    public function f_function_management_add() {
        $data['event'] = $this->user_model->get_EventList();
        $data['banquet'] = $this->user_model->get_BanquetList();
        $data['menu'] = $this->user_model->get_BanquetMenu();

        $data['path_name'] = 'User List';
        $data['title'] = "Master Table List";

        $this->load->view('Backend/FrontOfficeViews/f_function_add_view', $data);
    }
    // save banquet reservations to db 

    public function save_banquet_reservations() {

        parse_str($this->input->post('tab1Data', TRUE), $form1Data);
        parse_str($this->input->post('tab2Data', TRUE), $form2Data);
        parse_str($this->input->post('tab3Data', TRUE), $form3Data);

        $menuRows = $this->input->post('menuRowCount', TRUE);
        $otherChargeRows = $this->input->post('otherChargeRowCount', TRUE);


        $sub = $this->input->post('sub', TRUE);
        $grand = $this->input->post('grand', TRUE);
        $bal = $this->input->post('bal', TRUE);
		
        $result = $this->user_model->save_banquet_reservation($form1Data, $form2Data, $menuRows, $form3Data, $otherChargeRows, $sub, $grand, $bal);

        echo $result;

        /* echo "<pre>";
          print_r($form3Data); //print an array
          echo "</pre>" */
    }

    // banquet reservation list by admin view

    public function function_management_List() {
		$data = array();
        $data['banquer_res_list'] = $this->user_model->get_Banquet_Reservation_List();
        $this->load->view('Backend/AdminViews/admin_function_list_view', $data);
    }
	

    // banquet reservation list by front officer view 
    
    public function f_function_management_List() {
        $data = array();
        $data['banquer_res_list'] = $this->user_model->get_Banquet_Reservation_List();
        $this->load->view('Backend/FrontOfficeViews/f_function_list_view', $data);
    }

    // edit banquet reservation by admin view

	public function edit_banquet_reservation(){
		$data = array();
		$refid = $this->uri->segment(3);
		
		$banq = $this->user_model->banquet_res_details($refid);
		$data['bnq'] = $banq;
		
		$this->load->view('Backend/AdminViews/edit_banquet_reservation', $data);
	}

    // edit banquet reservation by front officer view

    public function f_edit_banquet_reservation(){
        $data = array();
        $refid = $this->uri->segment(3);
        
        $banq = $this->user_model->banquet_res_details($refid);
        $data['bnq'] = $banq;
        
        $this->load->view('Backend/FrontOfficeViews/f_edit_banquet_reservation', $data);
    }

    public function delete_banquet_reservations() {
        $resId = $this->input->post('resId', TRUE);
        $result = $this->user_model->delete_banquet_reservation($resId);

        echo $result;
    }

// end of banquet reservation module


//tour managemnet module

    public function tour_management() {
        $crud = new grocery_CRUD();

        $crud->set_table('packages');
        $crud->columns('package_name', 'tour_cost', 'meal_cost', 'package_description');


        $crud->field_type('package_name', 'dropdown', array('CULTURE' => 'CULTURE', 'NATURE1' => 'NATURE1', 'NATURE2' => 'NATURE2', 'ADVENTURE1' => 'ADVENTURE1', 'ADVENTURE2' => 'ADVENTURE2'));

        $crud->fields('package_name', 'tour_cost', 'meal_cost', 'package_description');


        $crud->display_as('package_name', 'Package Name')
                ->display_as('tour_cost', 'Tour Cost ($)')
                ->display_as('meal_cost', 'Meal Cost ($)')
                ->display_as('package_description', 'Description');


        $output = $crud->render();

        $data['path'] = $this->uri->segment(2);
        $data['path_name'] = 'Package List';
        $data['title'] = "Pacakge Information";
        $output->data = $data;

        $this->_set_output($output);
    }

    // add tour reservation by admin view

    public function admin_add_tour_view() { //admin_add_tour_detailsform	
        $data['packages'] = $this->user_model->get_packages();
		$status = array('Reserved', 'check-in');
        $data['resId'] = $this->user_model->get_reservationID($status);

        $this->load->view('BackEnd/AdminViews/admin_add_tour_view', $data);
    }

    // add tour reservation by front officer view

    public function f_add_tour_view() { //frontofficer_add_tour_detailsform    
        $data['packages'] = $this->user_model->get_packages();
        $status = array('Reserved', 'check-in');
        $data['resId'] = $this->user_model->get_reservationID($status);

        $this->load->view('BackEnd/FrontOfficeViews/f_add_tour_view', $data);
    }

    // tour list view by admin 

    public function admin_load_tour_List() { //admin_load_tour_List	
        $data['reslist'] = $this->user_model->get_tour_reservation_list();

        $this->load->view('BackEnd/AdminViews/admin_load_tour_List', $data);
    }

    // tour list view by front officer
    
    public function f_tour_List() { //frontofficer_load_tour_List 
        $data['reslist'] = $this->user_model->get_tour_reservation_list();

        $this->load->view('BackEnd/FrontOfficeViews/f_tour_List', $data);
    }

    // save tour reservations to db

    public function tour_details() {
        $date = $this->input->post('date');

        $data = array(
            'reservation_no' => $this->input->post('resId'),
            'package_id' => $this->input->post('package'),
            'date' => $this->input->post('date'),
            'meal' => $this->input->post('meal'),
            'participant' => $this->input->post('participant'),
            'time' => $this->input->post('time'),
            'description' => $this->input->post('requirment'));

        $result = $this->user_model->save_tour_details($data);


        if ($result > 0)
            echo "<script>window.alert('Successfully Saved Tour Reservation Details'); window.location.href ='admin_add_tour_view'</script> ";
        else
            echo "<script>window.alert('Data Insertion Failure'); window.location.href ='admin_add_tour_view'</script> ";
    }

    // edit tour reservation by admin view

    public function admin_edit_tour_details() {
		$data = array();
		$this->load->model('user_model');
		
        $tor_id = $this->uri->segment(3);
		
		if(isset($_POST['Update'])){
			$update_data = array(
            'reservation_no' => $this->input->post('resId'),
            'package_id' => $this->input->post('package'),
            'date' => $this->input->post('date'),
            'meal' => $this->input->post('meal'),
            'participant' => $this->input->post('participant'),
            'time' => $this->input->post('time'),
            'description' => $this->input->post('requirment'),
			'tour_res_id' => $this->input->post('tr_id'));
			
			$result = $this->user_model->update_tour_details($update_data);
        	//$result = $this->user_model->edit_data('tour_reservation', $_POST['tr_id'],'tour_reservation_id', $update_data);
			$this->admin_load_tour_List();
		}else{
			$data['tour'] = $this->user_model->get_tour_reservation($tor_id);
			$data['packages'] = $this->user_model->get_packages();
			$status = array('Reserved', 'check-in');
			$data['resId'] = $this->user_model->get_reservationID($status);

			$this->load->view('BackEnd/AdminViews/admin_edit_tour_view', $data);
		}
    }

    // edit tour reservation by front officer view
    
    public function f_edit_tour_details() {
        $data = array();
        $this->load->model('user_model');
        
        $tor_id = $this->uri->segment(3);
        
        if(isset($_POST['Update'])){
            $update_data = array(
            'reservation_no' => $this->input->post('resId'),
            'package_id' => $this->input->post('package'),
            'date' => $this->input->post('date'),
            'meal' => $this->input->post('meal'),
            'participant' => $this->input->post('participant'),
            'time' => $this->input->post('time'),
            'description' => $this->input->post('requirment'),
            'tour_res_id' => $this->input->post('tr_id'));
            
            $result = $this->user_model->update_tour_details($update_data);
            //$result = $this->user_model->edit_data('tour_reservation', $_POST['tr_id'],'tour_reservation_id', $update_data);
            $this->admin_load_tour_List();
        }else{
            $data['tour'] = $this->user_model->get_tour_reservation($tor_id);
            $data['packages'] = $this->user_model->get_packages();
            $status = array('Reserved', 'check-in');
            $data['resId'] = $this->user_model->get_reservationID($status);

            $this->load->view('BackEnd/FrontOfficeViews/f_edit_tour_reservation', $data);
        }
    }

    public function delete_tour_reservations() {
        $tourId = $this->input->post('id', TRUE);
        $result = $this->user_model->delete_tour_reservation_list($tourId);

        echo $result;
    }
// end of tour reservation module
    
// admin report view

    public function report_management() {
        $this->load->view('Backend/AdminViews/admin_report_view');
    }

    

}
