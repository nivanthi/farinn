<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Report extends Auth_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('report_model');
        $this->load->library('m_pdf');
    }

// room information report


    public function load_room_report_form() {

        $data['foreign'] = $this->report_model->get_roomType_Charges_wise_report_foreign();
        $data['local'] = $this->report_model->get_roomType_Charges_wise_report_local();
        $data['suite_roomNo'] = $this->report_model->get_suit_rooms();
        $data['delux_roomNo'] = $this->report_model->get_delux_rooms();
        $data['standard_roomNo'] = $this->report_model->get_standard_rooms();


        include APPPATH . 'third_party/mpdf/mpdf.php';

        $mpdf = new mPDF('en-GB-x', 'A4', '', '', 5, 5, 75, 23, 6, 3);

        $mpdf->SetHTMLHeader('<div><img src="assets/letter-head/header.jpg"> </div>');
        $mpdf->SetHTMLFooter('<hr>         
         
        <table width="100%" style="background-image:url(assets/letter-head/footer.jpg);  margin-left: 0px; margin-right: 0px;">     
          <tr>
              <td height="50px" style="color:white; "> &#160; {DATE j-m-Y}</td>
              <td style="color:black; text-align:right;">{PAGENO} of {nbpg} pages</td>              
          </tr>      
        </table>');

        $mpdf->SetDisplayMode('fullpage');
        $mpdf->list_indent_first_level = 0; // 1 or 0 - whether to indent the first level of a list

        $html = $this->load->view('Backend/ReportsViews/room_report', $data, true);

        $mpdf->WriteHTML($html);

        $mpdf->Output();
    }
	
	public function reserved_room_form(){
		$data = array();
		$this->load->model('user_model');
		$id = $_GET['id'];
		
		$data['res_data'] = $this->user_model->room_res_deatils($id);
		
        include APPPATH . 'third_party/mpdf/mpdf.php';

        $mpdf = new mPDF('en-GB-x', 'A4', '', '', 5, 5, 75, 23, 6, 3);

        $mpdf->SetHTMLHeader('<div><img src="assets/letter-head/header.jpg"> </div>');
        $mpdf->SetHTMLFooter('<hr>         
         
        <table width="100%" style="background-image:url(assets/letter-head/footer.jpg);  margin-left: 0px; margin-right: 0px;">     
          <tr>
              <td height="50px" style="color:white; "> &#160; {DATE j-m-Y}</td>
              <td style="color:black; text-align:right;">{PAGENO} of {nbpg} pages</td>              
          </tr>      
        </table>');

        $mpdf->SetDisplayMode('fullpage');
        $mpdf->list_indent_first_level = 0; // 1 or 0 - whether to indent the first level of a list

        $html = $this->load->view('Backend/ReportsViews/room_reservation_form', $data, true);

        $mpdf->WriteHTML($html);

        $mpdf->Output();
	}

    public function load_meal_report_form() {
        $data['foodInfo'] = $this->report_model->get_foodInfo();
        $data['beverageInfo'] = $this->report_model->get_beverageInfo();
        $this->load->view('Backend/ReportsViews/meal_report_form', $data);
    }

    public function meal_report() {
        $type = $this->input->post('mealType');
        $opt = $this->input->post('opt');
        $fcode = $this->input->post('foodcode');
        $bcode = $this->input->post('bevcode');
        $fname = $this->input->post('foodname');
        $bname = $this->input->post('beveragename');
        $filter = $this->input->post('filter');
        $amount = $this->input->post('amount');

        if ($type == "food")
            $data['menu'] = $this->report_model->get_meal_info($type, $opt, $fcode, $fname, $filter, $amount);

        if ($type == "beverage")
            $data['menu'] = $this->report_model->get_meal_info($type, $opt, $bcode, $bname, $filter, $amount);

        include APPPATH . 'third_party/mpdf/mpdf.php';

        $mpdf = new mPDF('en-GB-x', 'A4', '', '', 5, 5, 75, 23, 6, 3);

        $mpdf->SetHTMLHeader('<div><img src="assets/letter-head/header.jpg"> </div>');
        $mpdf->SetHTMLFooter('<hr>		      
		      <table width="100%" style="background-image:url(assets/letter-head/footer.jpg);  margin-left: 0px; margin-right: 0px;  ">			
			      <tr>
			         <td height="50px" style="color:white; "> &#160; {DATE j-m-Y}</td>
			         <td style="color:black; text-align:right;">{PAGENO} of {nbpg} pages</td>			         
			      </tr>			 
			  </table>');

        $mpdf->SetDisplayMode('fullpage');

        $mpdf->list_indent_first_level = 0; // 1 or 0 - whether to indent the first level of a list

        if ($type == "food")
            $html = $this->load->view('BackEnd/ReportsViews/food_menu_report', $data, true);

        elseif ($type == "beverage")
            $html = $this->load->view('BackEnd/ReportsViews/beverage_menu_report', $data, true);

        $mpdf->WriteHTML($html);

        $mpdf->Output();
    }

//----------------------banquet report----------------------
    public function load_banquet_reservation_invoice_report() {

        $id = $_GET['id'];
        // $id = 30; //$this->input->post('view_id');

        $data['basicInfo'] = $this->report_model->get_Banquet_Reservation($id);

        $data['extraCharge'] = $this->report_model->get_Banquet_Reservation_extra_charges($id);

        $data['menuCharge'] = $this->report_model->get_Banquet_Reservation_menu_charges($id);

        $data['other'] = $this->report_model->get_Banquet_Reservation_other_charges($id);

        $data['charges'] = $this->report_model->get_Banquet_Reservation_charges($id);


        include APPPATH . 'third_party/mpdf/mpdf.php';

        $mpdf = new mPDF('en-GB-x', 'A4', '', '', 5, 5, 75, 23, 6, 3);

        $mpdf->SetHTMLHeader('<div><img src="assets/letter-head/header.jpg"> </div>');
        $mpdf->SetHTMLFooter('<hr>         
          <table width="100%" style="background-image:url(assets/letter-head/footer.jpg);  margin-left: 0px; margin-right: 0px;  ">     
            <tr>
               <td height="50px" style="color:white; "> &#160; {DATE j-m-Y}</td>
               <td style="color:black; text-align:right;">{PAGENO} of {nbpg} pages</td>              
            </tr>      
        </table>');




        $mpdf->SetDisplayMode('fullpage');

        $mpdf->list_indent_first_level = 0; // 1 or 0 - whether to indent the first level of a list


        $html = $this->load->view('BackEnd/ReportsViews/banquet_reservation_Invoice', $data, true);


        $mpdf->WriteHTML($html);

        $x = 30;
        $mpdf->Output('Reservation Invoice ' . $x . '.pdf', 'I');
    }



	public function reservation_payment_report(){
		$data = array();
		$this->load->model('user_model');
        $data['countries'] = $this->user_model->get_countries();
		
		if(isset($_POST['Search'])){
			if($_POST['arrival_date'] != null && $_POST['depature_date'] != null){
				$arrival_date = date("Y-m-d", strtotime($_POST['arrival_date']));
				$depature_date = date("Y-m-d", strtotime($_POST['depature_date']));
			}else{
				$arrival_date = '';
				$depature_date = '';
			}
			
			$results = $this->report_model->reservation_deatils($_POST['status'],$_POST['country'],$arrival_date,$depature_date);
			
			$data['rpr'] = $results;
		}
		
		$this->load->view('Backend/ReportsViews/reservation_report', $data);
		
		
	}
	
	public function reservation_revenue_report(){
		$data = array();
		if(isset($_POST['Search'])){
			$arrival_date = date("Y-m-d", strtotime($_POST['arrival_date']));
			$depature_date = date("Y-m-d", strtotime($_POST['depature_date']));
			
			$mon1 =0; $mon2 =0; $mon3 =0; $mon4 =0; $mon5 =0; $mon6 =0; $mon7 =0; $mon8 =0; $mon9 =0; $mon10 =0; $mon11 =0; $mon12 =0;
			for($m=1; $m<=12; ++$m){
				if($m > 9){$mm = $m;}else{ $mm = '0'.$m;}
				$d1 = date('Y').'-'.$mm.'-'.'01';
				$d2 = date('Y').'-'.$mm.'-'.'31';
				$results = $this->report_model->reservation_deatils('','',$d1,$d2, 'tot');
				//print_r($results);
				foreach($results as $re){
					if($m == 1){ $mon1 += $re->totRs;
					}else if($m == 2){ $mon2 += $re->totRs;
					}else if($m == 3){ $mon3 += $re->totRs;
					}else if($m == 4){ $mon4 += $re->totRs;
					}else if($m == 5){ $mon5 += $re->totRs;
					}else if($m == 6){ $mon6 += $re->totRs;
					}else if($m == 7){ $mon7 += $re->totRs;
					}else if($m == 8){ $mon8 += $re->totRs;
					}else if($m == 9){ $mon9 += $re->totRs;
					}else if($m == 10){ $mon10 += $re->totRs;
					}else if($m == 11){ $mon11 += $re->totRs;
					}else if($m == 12){ $mon12 += $re->totRs;}
				}
			}
			
			$data['results'] = $results;
		}
		
		$this->load->view('Backend/ReportsViews/reservation_graph_report', $data);
	}
	
	public function available_rooms_report(){
		$data = array();
		if(isset($_POST['Search'])){
			$arrival_date = date("Y-m-d", strtotime($_POST['arrival_date']));
			$depature_date = date("Y-m-d", strtotime($_POST['depature_date']));
			
			$ava_rooms = $this->report_model->available_room_list($arrival_date, $depature_date);
			$data['rooms_ava'] = $ava_rooms;
		}
		$this->load->view('Backend/ReportsViews/available_rooms_report', $data);
	}

}

/*


     <!-- 
	<table style="rotate:90|-90;"> to rotate table
	<div><img src="<?php echo $this->config->item('base_url'); ?>

/assets/uploads/files/user1-128x128.jpg" style="float:right;">DIV: Proin aliquet lorem id felis. Curabitur vel libero at mauris nonummy tincidunt. Donec imperdiet. Vestibulum sem sem, lacinia vel, molestie et, laoreet eget, urna. Curabitur viverra faucibus pede. Morbi lobortis. Donec dapibus. Donec tempus. Ut arcu enim, rhoncus ac, venenatis eu, porttitor mollis, dui. Sed vitae risus. In elementum sem placerat dui. Nam tristique eros in nisl. Nulla cursus sapien non quam porta porttitor. Quisque dictum ipsum ornare tortor. Fusce ornare tempus enim.
</div>
-------------------------------------------------------------
		include APPPATH . 'third_party/mpdf/mpdf.php';

		$mpdf=new mPDF('en-GB-x','A4','','',10,10,10,10,6,3); 


$mpdf->SetImportUse();	

//$mpdf->SetDocTemplate('sample_logoheader2.pdf',1);	// 1|0 to continue after end of document or not - used on matching page numbers


$mpdf->AddPage();
$mpdf->WriteHTML('Hallo World');
$mpdf->AddPage();
$mpdf->WriteHTML('Hallo World');
$mpdf->AddPage();
$mpdf->WriteHTML('Hallo World');


$mpdf->RestartDocTemplate();


$mpdf->AddPage();
$mpdf->WriteHTML('Hallo World');
$mpdf->AddPage();
$mpdf->WriteHTML('Hallo World');
$mpdf->AddPage();
$mpdf->WriteHTML('Hallo World');



$mpdf->Output();

exit;
   -->

*/ 