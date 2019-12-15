<meta charset="utf-8">
<title>Chilaw FarInn Beach | Reservation</title>
<link href="<?php echo base_url(); ?>assets/FrontEnd/images/favicon.ico" rel="icon" type="image/png">
<link href="http://fonts.googleapis.com/css?family=Domine:400,700%7CRoboto:400,300,500,700,900" rel="stylesheet" type="text/c">
<link href="<?php echo base_url(); ?>assets/FrontEnd/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>assets/FrontEnd/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/FrontEnd/css/owl.carousel.min.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>assets/FrontEnd/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>assets/FrontEnd/css/datepicker.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>assets/FrontEnd/css/style.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>assets/FrontEnd/css/jquery.fs.wallpaper.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>assets/FrontEnd/css/jquery.fs.boxer.css" rel="stylesheet" media="screen">

<div id="site">
  <header>
    <nav role="navigation" id="main-nav">
      <div class="container">
        <div class="row">
          <div class="col-xs-12"> <a href="<?php echo base_url(); ?>index.php" id="logo"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/logo-leisure.png" alt=""></a>
            <input type="checkbox" id="toggle-main-nav" class="toggle-nav-input">
            <ul id="menu-main-menu" class="menu">
              <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php">Site Homes</a> </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-parent-item"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/reservation">Reservation Home</a> </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/cancle">Modify | Cancle </a> </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page"> <a href="<?php echo base_url(); ?>index.php/FrontEnd/contact">Contact Us</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <br>
  <br>
  <div class="container content-padding-xs">
    <div class="row">
      <div class="page-title">
        <div class="col-sm-12" id="side">
          <div class="pull-right" >
            <button id="btnstep1" class="btn res "> Room Selection</button>
            <button id="btnstep2" class="btn res"> Guest info & Payment</button>
            <button id="btnstep3" class="btn res "> Confirmation</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <article id="content">
  <section class="container content-padding-lg" id="step1">
  <div class="row ">
    <div class="col-sm-8 col-xs">
      <div >
        <h5>SELECT YOUR MEAL PLAN </h5>
        <br>
        <br>
      </div>
      <div class="bs-example bs-example-tabs">
        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade active in" id="tab1">
            <form id="myForm">
              <table class='table '>
                <thead>
                  <tr>
                    <th>Room Name</th>
                    <th>Room Type</th>
                    <th>Max Occupancy</th>
                    <th>Room Only</th>
                    <th>Bed & Breakfast</th>
                    <th>Half Board</th>
                    <th>Full Board</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>STANDARD</td>
                    <td>Single</td>
                    <td><img src='<?php echo base_url(); ?>assets/FrontEnd/images/rooms/ico-adult.png' alt='' class='wp-image'> <img src='<?php echo base_url(); ?>assets/FrontEnd/images/rooms/ico-child.png' alt='' class='wp-image'></td>
                    <td><input type='radio' name='basis' id='standard_ro' class='chk'  value=<?php echo $standardbasis[0]['ro'] ?> >
                      &#160; $<?php echo $standardbasis[0]['ro'] ?></td>
                    <td><input type='radio' name='basis' id='standard_bb'  class='chk'   value=<?php echo number_format($standardbasis[0]['ro'] + $standardbasis[0]['breakfast'],2)  ?> >
                      &#160; $<?php echo number_format($standardbasis[0]['ro'] + $standardbasis[0]['breakfast'],2)  ?></td>
                    <td><input type='radio' name='basis' id='standard_hb'   class='chk'  value=<?php echo number_format($standardbasis[0]['ro'] + $standardbasis[0]['breakfast']+ $standardbasis[0]['lunch'],2)   ?> >
                      &#160; $<?php echo number_format($standardbasis[0]['ro'] + $standardbasis[0]['breakfast']+ $standardbasis[0]['lunch'],2)   ?></td>
                    <td><input type='radio' name='basis' id='standard_fb' class='chk'  value=<?php echo number_format($standardbasis[0]['ro'] + $standardbasis[0]['breakfast']+ $standardbasis[0]['lunch']+ $standardbasis[0]['dinner'],2)   ?> >
                      &#160; $<?php echo number_format($standardbasis[0]['ro'] + $standardbasis[0]['breakfast']+ $standardbasis[0]['lunch']+ $standardbasis[0]['dinner'],2)   ?></td>
                  </tr>
                  <tr>
                    <td>SUITE</td>
                    <td>Double</td>
                    <td><img src='<?php echo base_url(); ?>assets/FrontEnd/images/rooms/ico-adult.png' alt='' class='wp-image'> <img src='<?php echo base_url(); ?>assets/FrontEnd/images/rooms/ico-adult.png' alt='' class='wp-image'></td>
                    <td><input type='radio' name='basis' id='suite_ro' value=<?php echo $suitebasis[0]['ro'] ?> >
                      &#160; $<?php echo $suitebasis[0]['ro'] ?></td>
                    <td><input type='radio' name='basis' id='suite_bb' value=<?php echo number_format($suitebasis[0]['ro'] + $suitebasis[0]['breakfast'],2)   ?> >
                      &#160; $<?php echo number_format($suitebasis[0]['ro'] + $suitebasis[0]['breakfast'],2)   ?></td>
                    <td><input type='radio' name='basis' id='suite_hb' value=<?php echo number_format($suitebasis[0]['ro'] + $suitebasis[0]['breakfast']+ $suitebasis[0]['lunch'] ,2)  ?> >
                      &#160; $<?php echo number_format($suitebasis[0]['ro'] + $suitebasis[0]['breakfast']+ $suitebasis[0]['lunch'] ,2)  ?></td>
                    <td><input type='radio' name='basis' id='suite_fb' value=<?php echo number_format($suitebasis[0]['ro'] + $suitebasis[0]['breakfast']+ $suitebasis[0]['lunch']+ $suitebasis[0]['dinner'],2)   ?> >
                      &#160; $<?php echo number_format($suitebasis[0]['ro'] + $suitebasis[0]['breakfast']+ $suitebasis[0]['lunch']+ $suitebasis[0]['dinner'],2)   ?></td>
                  </tr>
                  <tr>
                    <td>DELUX</td>
                    <td>Family</td>
                    <td><img src='<?php echo base_url(); ?>assets/FrontEnd/images/rooms/ico-adult.png' alt='' class='wp-image'> <img src='<?php echo base_url(); ?>assets/FrontEnd/images/rooms/ico-adult.png' alt='' class='wp-image'> <img src='<?php echo base_url(); ?>assets/FrontEnd/images/rooms/ico-child.png' alt='' class='wp-image'> <img src='<?php echo base_url(); ?>assets/FrontEnd/images/rooms/ico-child.png' alt='' class='wp-image'></td>
                    <td><input type='radio' name='basis' id='delux_ro' value=<?php echo $deluxbasis[0]['ro'] ?> >
                      &#160; $<?php echo $deluxbasis[0]['ro'] ?></td>
                    <td><input type='radio' name='basis' id='delux_bb' value=<?php echo number_format($deluxbasis[0]['ro'] + $deluxbasis[0]['breakfast'],2)   ?> >
                      &#160; $<?php echo number_format($deluxbasis[0]['ro'] + $deluxbasis[0]['breakfast'],2)   ?></td>
                    <td><input type='radio' name='basis' id='delux_hb' value=<?php echo number_format($deluxbasis[0]['ro'] + $deluxbasis[0]['breakfast']+ $deluxbasis[0]['lunch'] ,2)  ?> >
                      &#160; $<?php echo number_format($deluxbasis[0]['ro'] + $deluxbasis[0]['breakfast']+ $deluxbasis[0]['lunch'] ,2)  ?></td>
                    <td><input type='radio' name='basis' id='delux_fb' value=<?php echo number_format($deluxbasis[0]['ro'] + $deluxbasis[0]['breakfast']+ $deluxbasis[0]['lunch']+ $deluxbasis[0]['dinner'],2)   ?> >
                      &#160; $<?php echo number_format($deluxbasis[0]['ro'] + $deluxbasis[0]['breakfast']+ $deluxbasis[0]['lunch']+ $deluxbasis[0]['dinner'],2)   ?></td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs"> <br>
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading"></div>
          <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body"> <br/>
              <h5>RESERVATION SUMMARY : <br>
                <br>
              </h5>
              <p>
                <?php  
                                 $arr_date = $_GET['ad'];
                                 $dep_date = $_GET['dd'];
                                 
                                 if(($arr_date != "") | ($dep_date != ""))
                                 {
                                    $ad = DateTime::createFromFormat('m/d/Y', $arr_date)->format('Y-M-d');
                                    $dd = DateTime::createFromFormat('m/d/Y', $dep_date)->format('Y-M-d');
                                 }
                                 else{
                                    $ad ="Arrival" ;
                                    $dd="Depature Date Not Selected";       
                                 }
                                 $diff = (abs(strtotime($dd) - strtotime($ad)))/(60*60*24);
                                    
                                 
                                 
                                 
                                 echo  $diff. " : Nights  ( ".$ad." - ".$dd." )" ?>
              </p>
              <b> Room :<span id="txtRoomCount" name="txtRoomCount" >
              <?php  echo  $_GET['count']; ?>
              </span><br/>
              <br/>
              <b>Room Cost :  USD $ <span id="txtRoomCost" name="txtRoomCost" Style="color:#C43922">0.00</span> </b>
              <h6>Excluding taxes and service charges</h6>
              <br>
              <div class="col-sm-6"> <img src="<?php echo base_url(); ?>assets/FrontEnd/images/paypal-icon.png" alt=""><br>
                <br>
              </div>
              <div class="col-sm-6">
                <input type="button" class="btn btn-primary btn-block" value="Book Now" id="step1Res" name="step1Res">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<section class="container content-padding-lg" id="step2">
  <div class="row ">
    <div class="col-sm-4 col-xs">
      <div >
        <h5>YOUR RESERVATION SUMMARY</h5>
        <br>
        <br>
      </div>
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading"></div>
          <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body"> </br>
              <p><b>CHECK-IN DATE  :</b><?php echo $ad; ?> </p>
              <p><b>CHECK-OUT DATE :</b><?php echo $dd; ?></p>
              <p>
                <?php  echo " <b>NO Of ROOM(S) : <b>". $_GET['count']?>
              </p>
              <p>ROOM NAME :
              
              <div id="room_name"></div>
              </p>
              <br>
              <p>OCCUPANCY :
              
              <div id="OCCUPANCY"></div>
              </p>
              <br>
              <p>BASIS :
              
              <div id="basic"></div>
              </p>
              <br>
              <p> </b> PER RATE :
              
              <div id="rate"></div>
              </p>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-8 col-xs">
      <div >
        <h5>FILL YOUR CONTACT DETAILS</h5>
        <br>
      </div>
      <div class="panel-group" id="accordion">
      <div class="panel panel-default">
      <div class="panel-heading"></div>
      <div class="panel-body">
      <br>
      <br>
      <form id="defaultForm" method="post"  action="<?php echo base_url(); ?>index.php/frontEnd/guestinfo">
        <div class="col-sm-6 col-xs" >
          <div class="form-group">
            <input type="text" class="form-control" name="name" id="name" placeholder="First Name" reqired/>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name"/>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="nic_passport" id="nic_passport" required="required" placeholder="NIC or Passport"/>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="add1" id="add1" placeholder="Address1"/>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="add2" id="add2" placeholder="Address2"/>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="city" id="city" placeholder="City"/>
          </div>
          <div class="form-group icon-arrow">
            <label class="sr-only" for="country">Country</label>
            <select class="form-control" id="country" name="country" >
              <option value="">Select Your Country</option>
              <?php 
                                 if (count($countries)) 
                                 {
                                 
                                  foreach ($countries as $list) 
                                    {                                                    
                                       echo "<option    value=". $list['country_id'].">" . $list['short_name']." </option>";                                                   
                                    }
                                  }
                                                       
                                  ?>
            </select>
          </div>
        </div>
        <div class="col-sm-6 col-xs booking-block">
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail address" />
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="contact" id="contact" placeholder="Telephone Number" reqired />
          </div>
          <div class="form-group">
            <textarea class="validate[required] text-input" rows="6" cols="43" name="Special Requirments" id="Special Requirments"  placeholder="Special Requirments" ></textarea>
          </div>
        </div>
        <div class="col-sm-12 col-xs booking-block">
          <div class="form-group"> <br>
            <input type="checkbox" name="receiver" value="0" checked />
            <font>I have read and accepted the terms and conditions. </font> </div>
          <div class="form-group"> <br>
            <br>
            <img src="<?php echo base_url(); ?>assets/FrontEnd/images/msg.jpg" alt=""> </div>
          <div class="form-group"> <br>
            <br>
            <img src="<?php echo base_url(); ?>assets/FrontEnd/images/payment_icons.png" alt=""> <br>
            <br>
            <br>
          </div>
          <h5> FILL YOUR PAYMENT DETAILS</h5>
          <br>
          <div class="form-group icon-arrow">
            <select class="form-control" name="card" id="card">
              <option value="">-- Card Type --</option>
              <option value="Visa">Visa</option>
              <option value="Master">Master</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="Cname" id="Cname" placeholder="Card Holder's Name"  reqired/>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="Cno" id="Cno" placeholder="Card Number"  reqired/>
          </div>
          <div class="form-group">
            <div class="row ">
              <div class='col-sm-2'> Date of Expired </div>
              <div class='col-sm-4'>
                <input type='number' min=1 max=12 class='form-control' id='mm' name='mm'placeholder="mm" >
              </div>
              <div class='col-sm-4'>
                <input type='number' min=2015 max=2500 class='form-control' id='yy' name='yy'placeholder="yy" >
              </div>
              <div class='col-sm-2'>
                <input type="text" class="form-control" name="cvc" id="cvc" placeholder="cvc"
                           max="999" data-fv-greaterthan-inclusive="false" data-fv-greaterthan-message=
                           "CVC : 3 Digits Security code in your credit card" min="100"
                           />
              </div>
            </div>
          </div>
          <br>
          <input type="hidden" name="ar_date" id="ar_date" value="<?php echo $_GET['ad']; ?>">
          <input type="hidden" name="dd_date" id="dd_date" value="<?php echo $_GET['dd']; ?>">
          <input type="hidden" name="nod" id="nod" value="<?php echo $_GET['count']; ?>">
          <input type="hidden" name="ad_basis" id="ad_basis">
          <input type="hidden" name="room_type" id="room_type">
          <input type="hidden" name="per_rate" id="per_rate">
          <br>
          <div> <br>
            <br>
            <button type="submit" class="btn btn-primary"  name="signup" value="Sign up" >Confirm Payement</button>
          </div>
          <br>
          <p><b>Once you click 'Confirm Payment' you will receive a confirmation email with a booking number.<b></P>
          <br>
          <br>
        </div>
        </div>
        </div>
        </div>
      </form>
    </div>
  </div>
  </div>
  </div>
</section>
</article>
<br>
<br>
<?php $this->load->view('FrontEnd/include/footer');?>
</div>
<!-- All Pages JS --> 
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/jquery.fs.wallpaper.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/owl.carousel.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/jquery.fs.boxer.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/bootstrap.datepicker.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/owl.carousel.min.js"></script> 
<!-- Main JS --> 
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/main.js"></script> 
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/jquery-1.11.1.min.js"></script> 
<!-- validaton JS --> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/FrontEnd/validation/dist/js/formValidation.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/FrontEnd/validation/dist/js/framework/bootstrap.js"></script> 
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/jquery.stellar.min.js"></script> 
<script type="text/javascript">
   $(function(){
   $('input[type="radio"]').click(function(){
    if ($(this).is(':checked'))
    {
   
      var count =  document.getElementById("txtRoomCount").innerHTML;
      var rc= (parseFloat(count) * parseFloat($(this).val())).toFixed(2);  
      document.getElementById("txtRoomCost").innerHTML = rc;
      //alert($(this).val());
     // alert(rc);
    }
   });
   
   });
   $(document).ready(function() {
   
   // Generate a simple captcha
   function randomNumber(min, max) {
     return Math.floor(Math.random() * (max - min + 1) + min);
   };
   $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
   
   $('#defaultForm').formValidation({
     message: 'This value is not valid',
     icon: {
        
         validating: 'glyphicon glyphicon-refresh'
     },
     fields: {         
   
         name: {
             validators: {
                 notEmpty: {
                     message: 'The name is required'
                 },
             }
         },
         
          lname: {
             validators: {
                 notEmpty: {
                     message: 'The Last name is required'
                 },
             }
         },
         
         email: {
             validators: {
                 notEmpty: {
                     message: 'The email address is required'
                 },
                 emailAddress: {
                     message: 'The input is not a valid email address'
                 }
             }
         },
               
        add1: {
             validators: {
                 notEmpty: {
                     message: 'The Address1 is required'
                 },
             }
         },
     
          city: {
             validators: {
                 notEmpty: {
                     message: 'The City is required'
                 },
             }
         },
   
          country: {
             validators: {
                 notEmpty: {
                     message: 'The Country is required'
                 },
             }
         },
   
      nic: {
          validators: {
              notEmpty: {
                  message: 'Please enter your NIC or Passport Number'
              }
          }
      },
   
       contact: {
             validators: {
                 notEmpty: {
                     message: 'The phone number is required'
                 },
             }
         },
   
        Requirments: {
             validators: {
                 notEmpty: {
                     message: 'Special Requirments Code is required'
                 },
             }
         },
   
       card: {
          validators: {
              notEmpty: {
                  message: 'Please select the card type'
              }
          }
      },
          Cname: {
             validators: {
                 notEmpty: {
                     message: 'The Card Holder\'s name is required'
                 },
             }
         },
   
          Cno: {
             validators: {
                 notEmpty: {
                     message: 'The Card Number is required'
                 },
                 callback: {
                  callback: function(value, validator) {
                      if (value.length <= 16) {
                          return {
                              valid: false,
                              message: 'The Credit Card must be contain  16 digits '
                          }
                      }
   
                      return true;
                  }
              }
          
             }
         },
   
          mm: {
          validators: {
              notEmpty: {
                  message: 'The Expire mounth is required'
              }
          }
      },
   
       yy: {
          validators: {
              notEmpty: {
                  message: 'The Expire year is required'
              }
          }
      },
    
         }
      });
   });
</script> 
<!-- button validaton JS --> 
<script type="text/javascript">
   $('#btnstep1').click(function() {
       $('#step1').toggle("show");
       $('#step2').hide();
       $('#step3').hide();
      
   });
   
   $("#btnstep2").click(function(){
       $("#step2").toggle("show");
       $('#step1').hide();
       $('#step3').hide();
      
   });
   
    $("#btnstep3").click(function(){
       $("#step3").toggle("show");
       $('#step1').hide();
       $('#step2').hide();
      
   });
   
   
   $( document ).ready(function() {
      
      $('#step2').hide();
      $('#step3').hide();
                
   
   });
   
   
   $('.res').click(function() {
    $(this).siblings().css({
        backgroundColor: '#777777 ',
        color: 'white'
    });
    $(this).css({
        backgroundColor: '#E74C3C',
        color: 'white'
    });
   });
   
   
   $("#step1Res").click(function(){ 
	   var val_type = $('input[name=basis]:checked', '#myForm').val()
	   
	   if(val_type == 55.00 || val_type == 70.00 || val_type == 100.00 || val_type == 125.00){
		   $('#room_name').html('Standard');
		   $('#room_type').val('Standard');
		   $('#OCCUPANCY').html('Single');
	   }else if(val_type == 65.00 || val_type == 80.00 || val_type == 105.00 || val_type == 130.00){
		   $('#room_name').html('Suite');
		   $('#room_type').val('Suite');
		   $('#OCCUPANCY').html('Double');
	   }else if(val_type == 90.00 || val_type == 105.00 || val_type == 130.00 || val_type == 155.00){
		  $('#room_name').html('Delux');
		  $('#room_type').val('Delux');
		  $('#OCCUPANCY').html('Family');
	   }
	   
	   if(val_type == 55.00 || val_type == 65.00 || val_type == 90.00){
		  $('#basic').html('Room Only');
		  $('#ad_basis').val('Room Only');
	   }else if(val_type == 70.00 || val_type == 80.00 || val_type == 105.00){
		  $('#basic').html('Bed & Breakfast');
		   $('#ad_basis').val('Bed & Breakfast');
	   }else if(val_type == 100.00 || val_type == 105.00 || val_type == 130.00){
		  $('#basic').html('Half Board'); 
		   $('#ad_basis').val('Half Board');
	   }else if(val_type == 125.00 || val_type == 130.00 || val_type == 155.00){
		  $('#basic').html('Full Board');
		   $('#ad_basis').val('Full Board');
	   }
	   
	   $('#rate').html('$ '+val_type);
	   $('#per_rate').val('$ '+val_type);
       $("#step2").toggle("show");
       $('#step1').hide();
       $('#step3').hide();
       $('#step4').hide();
   
       var cntry = $('#country').find(":selected").text();
       jQuery("label[for='step2_selected_Country']").html(cntry);
   
   
       $('#booking-form').formValidation({
   
        message: 'This value is not valid',
        icon: {
           
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {            
            country: {
                validators: {
                    notEmpty: {
                        message: 'The country is required and can\'t be empty'
                    }
                }
            },
         
        }
    });
});
   
   
   
   
   
   
</script>
<style type="text/css">
   .res{
   margin-left: 100px
   }
   table tr td {
   font-size: 12px
   }
   table thead tr th{
   font-size: 13px
   }
</style>
