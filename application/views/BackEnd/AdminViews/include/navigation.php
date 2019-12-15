<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
<title>Hotel Farinn</title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/BackEnd/favicon.ico">
<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/BackEnd/css/theme-default.css">
<!--script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/jquery/jquery.min.js"></script-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/actions.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/settings.js"></script>
<script type='text/javascript' src='<?php echo base_url(); ?>assets/BackEnd/js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>assets/BackEnd/js/plugins/validationengine/jquery.validationEngine.js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>assets/BackEnd/js/plugins/jquery-validation/jquery.validate.js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>assets/BackEnd/js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type='text/javascript' src='<?php echo base_url(); ?>assets/BackEnd/js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type='text/javascript' src='<?php echo base_url(); ?>assets/BackEnd/js/plugins/bootstrap/bootstrap-datepicker.js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>assets/BackEnd/js/plugins/bootstrap/bootstrap-select.js'></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/BackEnd/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
  <div class="mb-container">
    <div class="mb-middle">
      <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
      <div class="mb-content">
        <p>Are you sure you want to log out?</p>
        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
      </div>
      <div class="mb-footer">
        <div class="pull-right"> <a href="<?php echo base_url();?>index.php/login/logout" class="btn btn-success btn-lg">Yes</a>
          <button href="#" class="btn btn-default btn-lg mb-control-close">No</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="page-container">
<div class="page-sidebar">
  <ul class="x-navigation">
    <li class="xn-logo"> <a href=""><img src="<?php echo base_url();?>Assets/BackEnd/images/logo-leisure.png"></a> <a href="#" class="x-navigation-control"></a> </li>
    <li class="xn-profile"> <a href="#" class="profile-mini"> <img src="<?php echo base_url(); ?>assets/BackEnd/images/users/<?php echo  $_SESSION['picture'] ?>" /> </a>
      <div class="profile">
        <div class="profile-image"> <img src="<?php echo base_url(); ?>assets/BackEnd/images/users/<?php echo  $_SESSION['picture'] ?>"/> </div>
        <div class="profile-data">
          <div class="profile-data-name"> <?php echo $_SESSION['profile_name'] ?> </div>
          <div class="profile-data-title"> <?php echo $_SESSION['level'] ?> </div>
        </div>
        <div class="profile-controls"> <a href="<?php echo base_url();?>index.php/backend_controller/load_profile" class="profile-control-left"><span class="fa fa-info"></span></a> </div>
      </div>
    </li>
    <center>
      <li class="xn-title">NAVIGATION</li>
    </center>
    <li <?php if ($this->uri->segment(2)==""){ echo'class=" active"';}?>> <a href="<?php echo base_url(); ?>index.php/backend_controller"><span class="fa fa-desktop"></span> <span class="xn-text"> Hotel Dashboard</span></a> </li>
    <li class="  xn-openable <?php  if($this->uri->segment(1)==" banquet "){ echo 'class = "active " ';} ?>  "> <a href="#"><span class="glyphicon glyphicon-home"></span> <span class="xn-text"> Room Reservation</span></a>
      <ul>
        <li><a href="<?=base_url('index.php/backend_controller/admin_add_room_reservaion_details');?>"><i class="far fa-circle"></i> Add Room Reservation</a> </li>
        <li><a href="<?=base_url('index.php/backend_controller/reserved_room_list');?>"><i class="far fa-circle"></i> Room Reservation List</a> </li>
      </ul>
    </li>
    <li class="  xn-openable <?php  if($this->uri->segment(1)==" banquet "){ echo 'class = "active " ';} ?>  "> <a href="#"><span class="glyphicon glyphicon-home"></span> <span class="xn-text"> Banquet Reservation</span></a>
      <ul>
        <li><a href="<?=base_url('index.php/backend_controller/function_management_add');?>"><i class="far fa-circle"></i> Add Banquet Reservation</a> </li>
        <li><a href="<?=base_url('index.php/backend_controller/function_management_list');?>"><i class="far fa-circle"></i> Banquet Reservation List</a> </li>
      </ul>
    </li>
    <li class="  xn-openable <?php  if($this->uri->segment(1)==" report "){ echo 'class = "active " ';} ?>  "> <a href="#"><span class="fa fa-car"></span> <span class="xn-text"> Tour Reservation</span></a>
      <ul>
        <li> <a href="<?php echo base_url(); ?>index.php/backend_controller/admin_add_tour_view"><i class="far fa-circle"></i> <span class="xn-text"> Add Tour Reservation</span></a> </li>
        <li> <a href="<?php echo base_url(); ?>index.php/backend_controller/admin_load_tour_List"><i class="far fa-circle"></i> <span class="xn-text"> Tour Reservation List</span></a> </li>
      </ul>
    </li>
    <li class="  xn-openable <?php  if($this->uri->segment(1)==" report "){ echo 'class = "active " ';} ?>  "> <a href="#"><span class="fa fa-paste"></span> <span class="xn-text"> Reports</span></a>
      <ul>
        <li><a href="<?php echo base_url(); ?>index.php/report/load_meal_report_form"><i class="far fa-circle"></i> Menu Reports</a> </li>
        <li><a href="<?php echo base_url(); ?>index.php/report/load_room_report_form"><i class="far fa-circle"></i> Room Information</a>
        <li><a href="<?php echo base_url(); ?>index.php/report/reservation_payment_report"><i class="far fa-circle"></i> Reservation Made Report</a>
        <li><a href="<?php echo base_url(); ?>index.php/report/reservation_revenue_report"><i class="far fa-circle"></i> Reservation Graph Report</a>
        <li><a href="<?php echo base_url(); ?>index.php/report/available_rooms_report"><i class="far fa-circle"></i> Available Rooms</a>
      </ul>
    </li>
    <li <?php if ($this->uri->segment(2)=="load_lists"){ echo'class=" active"';}?>> <a href="<?php echo base_url(); ?>index.php/backend_controller/load_lists"><span class="fa fa-list"></span> <span class="xn-text"> Lists </span></a> </li>
  </ul>
</div>
<div class="page-content">
