
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class FrontEnd extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('frontEndmodel');
    }

    public function index() {
        $this->load->view('FrontEnd/home');
    }

    public function rooms() {
        $data['suiteRoomPrice'] = $this->frontEndmodel->get_roomPrice_suite();
        $data['diluxRoomPrice'] = $this->frontEndmodel->get_roomPrice_dilux();
        $data['standardRoomPrice'] = $this->frontEndmodel->get_roomPrice_standard();
        $this->load->view('FrontEnd/rooms', $data);
    }

    public function wedding_services() {
        $this->load->view('FrontEnd/wedding_services');
    }

    public function tours() {
        $this->load->view('FrontEnd/tours');
    }

    public function gallery() {
        $this->load->view('FrontEnd/gallery');
    }

    public function reservation() {

        $aDate = $this->input->post('arrival_date');
        $dDate = $this->input->post('departure_date');
        if (($aDate != false) | ($dDate != false)) {
            $data['arrival'] = DateTime::createFromFormat('m/d/Y', $aDate)->format('Y-M-d');
            $data['depature'] = DateTime::createFromFormat('m/d/Y', $dDate)->format('Y-M-d');
        } else {
            $data['arrival'] = "Arrival";
            $data['depature'] = "Depature Date Not Selected";
        }



        $data['roomCount'] = $this->input->post('room_count');
        $data['diff'] = (abs(strtotime($dDate) - strtotime($aDate))) / (60 * 60 * 24);
        $data['countries'] = $this->frontEndmodel->get_countries();



        //get room basisi price for reservation page
        $data['suitebasis'] = $this->frontEndmodel->get_suite_basis_price();
        $data['deluxbasis'] = $this->frontEndmodel->get_delux_basis_price();
        $data['standardbasis'] = $this->frontEndmodel->get_standard_basis_price();


        $this->load->view('FrontEnd/reservation', $data);
    }

//guest information(reservation page)

    public function guestinfo() {
        //Insert to Person Table
        $add_data = array('f_name' => $_POST['name'], 'l_name' => $_POST['lname'], 'Nic-Passport' => $_POST['nic_passport'], 'address_1' => $_POST['add1'], 
		'address_2' => $_POST['add2'], 'city' => $_POST['city'], 'country_id' => $_POST['country'], 'phone' => $_POST['contact'], 'email' => $_POST['email'], 
		'Remark' => $_POST['Special_Requirments']);
        $last_id = $this->frontEndmodel->save_data('person', $add_data);

        //Insert to reservation table
        $ari_date = DateTime::createFromFormat('m/d/Y', $_POST['ar_date'])->format('Y-m-d');
        $dep_date = DateTime::createFromFormat('m/d/Y', $_POST['dd_date'])->format('Y-m-d');
		
		$start = strtotime($ari_date);
		$end = strtotime($dep_date);
		
		$nod = ceil(abs($end - $start) / 86400);
		
		//Convert Basis
		if($_POST['ad_basis'] == 'Room Only'){ $base = 'RO';
		}else if($_POST['ad_basis'] == 'Bed & Breakfast'){$base = 'BB';
		}else if($_POST['ad_basis'] == 'Half Board'){$base = 'HB';
		}else if($_POST['ad_basis'] == 'Full Board'){$base = 'FB';}
		
		//Convert room type
		if($_POST['room_type'] == 'Standard'){ $rt = '3';
		}else if($_POST['room_type'] == 'Suite'){$rt = '1';
		}else if($_POST['room_type'] == 'Delux'){$rt = '2';}
		
        $add_reservation = array('reservation_status' => 'Reserved', 'person_id' => $last_id, 'arrival_date' => $ari_date, 'depature_date' => $dep_date
        , 'no_of_days' => $nod, 'currency' => 'USD', 'basis' => $base, 'room_type' => $rt);
        $last_id = $this->frontEndmodel->save_data('reservation', $add_reservation);

        //Insert payment
        $add_payment = array('reservation_no' => $last_id, 'room_charges' => $_POST['per_rate'], 'payement_date' => date('Y-m-d'),
            'payement_method' => 'Card');
        $this->frontEndmodel->save_data('payment', $add_payment);

        //Send mail script
          $Name = $_POST['name'].' '.$_POST['lname'];
          $str ="";
          $str .="	<table width='565' border='1'>
          <tbody>
          <tr>
          <td width='123'>Name:</td>
          <td width='164' colspan='3'>".$Name."</td>
          </tr>
          <tr>
          <td>Arrival Date:</td>
          <td>".$ari_date."</td>
          <td>Departure Date:</td>
          <td>".$dep_date."</td>
          </tr>
          <tr>
          <td>No Rooms:</td>
          <td>".$_POST['nod']."</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
          <tr>
          <td>Basis:</td>
          <td>".$_POST['ad_basis']."</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
          </tbody>
          </table>";

          $to = $_POST['email'];
          $subject = "FarInn Hotel Reservation - Booking";
          $txt = $str;
          $headers = "From: booking@farinn.lk";

          mail($to,$subject,$txt,$headers);

        echo "<script>window.alert('MAIL WAS SUCCESSFULLY SENT'); window.location.href ='index'</script> ";
    }

    public function banquet() {
        $this->load->view('FrontEnd/banquet');
    }

    public function b_inquries() {
        $date = $this->input->post('date');
        $format_date = DateTime::createFromFormat('m/d/Y', $date)->format('Y-m-d');
        $data = array(
            'f_name' => $this->input->post('name'),
            'l_name' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
            'type_f_event' => $this->input->post('event'),
            'date_f_event' => $format_date,
            'time_f_event' => $this->input->post('time'),
            'excepted_guest' => $this->input->post('guests'));
        $this->frontEndmodel->save_b_inquries($data);
        echo "<script>window.alert('MAIL WAS SUCCESSFULLY SENT'); window.location.href ='banquet'</script> ";
    }

    public function contact() {
        $this->load->view('FrontEnd/contact');
    }

    public function cancle() {
        $this->load->view('FrontEnd/cancle');
    }

    public function feedback() {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'feedback' => $this->input->post('feedback'));
        $this->frontEndmodel->save_feedback($data);
        echo "<script>window.alert('MAIL WAS SUCCESSFULLY SENT'); window.location.href ='contact'</script> ";
    }

    //get room availability in home page

    public function get_room_availability() {
        parse_str($this->input->post('tab1Data', TRUE), $tab1Data);
        $result = $this->frontEndmodel->get_available_room_list($tab1Data);

        /* 	echo "<pre>";
          print_r($data['available_rooms']); //print an array
          echo "</pre>"; */


        echo $result;
    }

    /* public function load_reservation_basis_list_view()	//admin_load_tour_List	
      {

      $data['basislist'] = $this->frontEndmodel->get_reservation_basis_list_price();

      //var_dump($data['basislist'] );

      $this->load->view('frontEnd/reservation', $data);

      } */
}
