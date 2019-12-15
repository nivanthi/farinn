<!--
/***************************************
* Author : Nivanthi
* Created Date: 2015-07-25
* Description: front end banquet page module
****************************************/
-->
<?php 
   $this->load->view('FrontEnd/include/header');
   $this->load->view('FrontEnd/include/include');
?>
<link href="<?php echo base_url(); ?>assets/FrontEnd/css/owl.theme.default.min.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>assets/FrontEnd/css/jquery.fs.wallpaper.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>assets/FrontEnd/css/jquery.fs.boxer.css" rel="stylesheet" media="screen">
<body >
  <div id="site">
    <header id="header" class="header-content-banquet"  role="banner">
      <div class="header-row ">
        <?php 
          $this->load->view('FrontEnd/include/navigation');
        ?>
          <div id="page-heading">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <h1 class="page-title">Banquet Halls</small></h1>
                  </div>
               </div>
            </div>
          </div>
    </header>
   <!-- #header --> 
   </br><br>
   <article id="content">
   <a name="vip"></a>
  <section class="container content-padding-lg">
   <div class="row">
      <div class="col-sm-6 booking-block">
         <h4 align="center"><br>ROYAL PRINCESS VIP</h4>
         <hr>
         <p align="justify">
            Picking the venue for the most significant day of your lives can be a daunting prospect.That is until you walk in to the our ROYAL PRINCESS VIP perfect blend of exquisite colonial architecture coupled with contemporary grandeur simply sweeps you off your feet, thus making your decision that much easier.
            Ability to accommodate up to 400 guests for wedding receptions and 800 for conferences
         </p>
         <br><br><br>
         <div class="gallery-carousel">
            <div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/weddings/vip1.jpg" alt="" class="wp-image"></div>
            <div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/weddings/vip2.jpg" alt="" class="wp-image"></div>
            <div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/weddings/vip3.jpg" alt="" class="wp-image"></div>
            <div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/weddings/vip4.jpg" alt="" class="wp-image"></div>
         </div>
         <a name="grand"></a>
      </div>
      <div class="col-sm-6 booking-block">
         <h4 align="center"><br>GRAND BALLROOM</h4>
         <hr>
         <p align="justify">
            Picking the venue for the most significant day of your lives can be a daunting prospect.That is until you walk in to the our ROYAL PRINCESS VIP perfect blend of exquisite colonial architecture coupled with contemporary grandeur simply sweeps you off your feet, thus making your decision that much easier.
            Ability to accommodate up to 400 guests for wedding receptions and 800 for conferences
         </p>
         <br><br><br>
         <div class="gallery-carousel">
            <div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/weddings/ball1.jpg" alt="" class="wp-image"></div>
            <div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/weddings/ball2.jpg" alt="" class="wp-image"></div>
            <div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/weddings/ball3.jpg" alt="" class="wp-image"></div>
            <div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/weddings/ball4.jpg" alt="" class="wp-image"></div>
         </div>
      </div>
   </div>
</section>
   <a name="vip"></a>
   <section class="container content-padding-lg">
   <h4 align="center"><br>BANQUET HALL RESERVATION REQUEST FORM.</h4>
   <hr>
   <form id="defaultForm" method="post"  action="<?php echo base_url(); ?>index.php/frontEnd/b_inquries">
      <div class="col-sm-6 col-xs" >
         <div class="form-group">
            <input type="text" class="form-control" name="name" id="name" placeholder="First Name" />
         </div>
         <div class="form-group">
            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name"/>
         </div>
         <div class="form-group">          
            <input type="text" class="form-control" name="email" id="email" placeholder="E-mail address" />
         </div>
         <div class="form-group">          
            <input type="text" class="form-control" name="contact" id="contact" placeholder="Telephone Number"  />
         </div>
      </div>
      <div class="col-sm-6 col-xs booking-block">
         <div class="form-group icon-arrow">
            <select class="form-control" name="event">
               <option value="">-- Select a Event --</option>
               <option value="BirthDay">Birth Day</option>
               <option value="Wedding">Wedding Ceremony</option>
               <option value="homecoming">Home Coming</option>
               <option value="anniversary">Anniversary Party</option>
               <option value="cooperate">Cooperate Gathering</option>
               <option value="business">Business Conference</option>
            </select>
         </div>
         <div class="form-group icon-calendar">
            <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true" name="date" id="date" placeholder="Date of event">
         </div>
         <div class="form-group">               
            <input type="text" class="form-control" name="time" id="time"  placeholder="Start time of event" />
         </div>
         <div class="form-group">          
            <input type="text" class="form-control" name="guests" id="guests" placeholder="Expected # of guests" />
         </div>
      </div>
      <div class="form-group">
         <div class="col-sm-12">
            <br/>  <br/><br/> 
            <center>
               <button type="submit" class="btn btn-primary"  name="signup" value="Sign up" >Book Now</button>
            </center>
         </div>
      </div>
   </form>
</section>
<br><br>
</article><!-- #content --> 
   <a href="#" class="scrollToTop"></a>
   <?php $this->load->view('FrontEnd/include/footer');?>
   </div>
</body>
<!-- All Pages JS -->
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/jquery.fs.wallpaper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/jquery.fs.boxer.min.js"></script>
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/bootstrap.datepicker.min.js"></script>
<!-- Main JS -->
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- validaton JS -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/FrontEnd/validation/dist/js/formValidation.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/FrontEnd/validation/dist/js/framework/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/jquery.stellar.min.js"></script>

<style type="text/css">
   .scrollToTop{
   width:40px;
   height: 40px; 
   background-image:url("<?php echo base_url(); ?>assets/FrontEnd/images/arrow.png");
   position:fixed;
   right:30px;
   bottom:30px;
   display:none;
   }
   #header{
   background-image: url('assets/FrontEnd/images/bg-header-6.jpg');
   background-repeat: no-repeat;
   background-position: top right;
   background-size: cover;
   color: #fff;
   min-height: 300px;
   position: relative;
   }
   .content-padding-lg{
   padding-bottom: 3rem;
   padding-top: 3rem;
   }
</style>

<script type="text/javascript">
   $(window).scroll(function(){
       if ($(this).scrollTop() > 100) {
           $('.scrollToTop').fadeIn();
       } else {
           $('.scrollToTop').fadeOut();
       }
   });
   
     $('.scrollToTop').click(function(){
       $('html, body').animate({scrollTop : 0},800);
       return false;
   });
   
    $(document).ready(function(){     
         //Check to see if the window is top if not then display button
         $(window).scroll(function(){
             if ($(this).scrollTop() > 100) {
                 $('.scrollToTop').fadeIn();
             } else {
                 $('.scrollToTop').fadeOut();
             }
         });
   
    //Click event to scroll to top
         $('.scrollToTop').click(function(){
             $('html, body').animate({scrollTop : 0},800);
             return false;
         });
          
     });
</script>

<script type="text/javascript">
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
        
              date: {
                   validators: {
                       notEmpty: {
                           message: 'The date is required'
                       },
                   }
               },
   
            event: {
                validators: {
                    notEmpty: {
                        message: 'The event is required and can\'t be empty'
                    }
                }
            },
                time: {
                   validators: {
                       notEmpty: {
                           message: 'The time Code is required'
                       },
                   }
               },
        
                guests: {
                   validators: {
                       notEmpty: {
                           message: 'The guest ammount is required'
                       },
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
           }
       });
   });
</script>