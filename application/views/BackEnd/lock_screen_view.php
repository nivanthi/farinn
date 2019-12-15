<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
<title>Lock Screen</title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/BackEnd/favicon.ico">
<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/BackEnd/css/theme-default.css">
</head>
<body>
<div class="lockscreen-container">
  <div class="lockscreen-box animated fadeInDown">
    <div class="lsb-access">
      <div class="lsb-box">
        <div class="fa fa-lock"></div>
        <div class="user animated fadeIn"> <img src="<?php echo base_url();?>assets/BackEnd/images/users/<?php echo $_SESSION['picture'] ?>" />
          <div class="user_signin animated fadeIn">
            <div class="fa fa-sign-in"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="lsb-form animated fadeInDown">
      <form action="<?php echo base_url();?>index.php/login/idle_login_athentication"  method="post" class="form-horizontal">
        <div class="form-group sign-in animated fadeInDown">
          <div class="col-md-12">
            <div class="input-group">
              <div class="input-group-addon"> <span class="fa fa-user"></span> </div>
              <input name="username" id="username" type="text" class="form-control" placeholder="Your login"/>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group">
              <div class="input-group-addon"> <span class="fa fa-lock"></span> </div>
              <input name="password" id="password"  type="password" class="form-control" placeholder="Password"/>
            </div>
          </div>
        </div>
        <input type="submit" class="hidden"/>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/jquery/jquery-1.11.1.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/jquery/jquery-ui.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/bootstrap/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/actions.js"></script>
</body>
</html>
