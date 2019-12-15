<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
<!-- META SECTION -->
<title>Hotel Farinn Login</title>
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/BackEnd/favicon.ico">
<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/BackEnd/css/theme-default.css">

<!-- EOF CSS INCLUDE -->
</head>

<body>
<div class="login-container login-v2">
  <div class="login-box animated fadeInDown">
    <div class="login-body">
      <center>
        <img src="<?php echo base_url();?>assets//BackEnd/images/logo-lr.png"/>
        <div class="login-title"><strong>BackEnd Login </strong> </div>
      </center>
      <form action="<?php echo base_url();?>index.php/login/login_athentication" class="form-horizontal" method="post">
        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group">
              <div class="input-group-addon"> <span class="fa fa-user"></span> </div>
              <input name="username" id="username" type="email" class="form-control" placeholder="Email"/>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="input-group">
              <div class="input-group-addon"> <span class="fa fa-lock"></span> </div>
              <input name="password" id="password" type="password" class="form-control" placeholder="Password"/>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6">
            <p>
              <input type="checkbox" name="myTextEditBox" value="checked"/>
              &nbsp;Keep me logged in</p>
          </div>
          <div class="col-md-6 text-right"> <a href="#">Forgot your password?</a> </div>
        </div>
        <?php if(isset($_GET['error']))
                      {
                             $error= $_GET['error'];
                                   if($error == 1){

                                    echo "<center>  <font color='red' size='2'>
                                      <strong>Error!</strong>
                                      Username or Password is incorrect!</div></font> </center>";
                                  }

                                if($error == 2){

                                    echo "<center>  <font color='red' size='2'>
                                      <strong>Error!</strong>
                                      Email is in Invalid Format </div></font> </center>";
                                  }
                         


                         }?>
        <div class="form-group">
          <div class="col-md-12">
            <button class="btn btn-primary btn-lg btn-block">Login</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>