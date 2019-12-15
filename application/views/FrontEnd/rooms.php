<!--
/***************************************
* Author : Nivanthi
* Created Date: 2015-07-25
* Description: front end room page module
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
   <header id="header" class="header-content"  role="banner">
      <div class="header-row ">
         <?php 
            $this->load->view('FrontEnd/include/navigation');
            ?>
         <div id="page-heading">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <h1 class="page-title"> Rooms & Suites </h1>
                  </div>
               </div>
            </div>
         </div>
   </header>
   <!-- #header --> 
   <br>
   <section class="container content-padding-lg ">
	   <div class="row">
		   	<div class="col-sm-6">
			   <p class="lead"><p class="lead">with years of experience in the hospitality industry management of Chilaw Far Inn Beach Hotel makes every possible attempt to make you feel at home and most importantly a very safe atmosphere for your entire family.</p>
			   <h3>Our facilities which makes you comfertable</h3>
				   <ul class="list-pointer">
					   <li>DVD/CD Player/Cable Channels and 29" LCD Television with Remote Control</li>
					   <li>Sitting area with 24-Hour In-Room Dining</li>
					   <li>Wireless High Speed Internet Access</li>
					   <li>100% Non-Smoking Guest Rooms with Aircondition</li>
					   <li> 24 hours Housekeeping Service</li>
					   <li>Free Local Newspaper on Weekdays</li>
					   <li>In_house Telephone/Iron/Ironing Board and In-Room Electronic Safe</li>
				   </ul></p> 
			</div><!-- .col-sm-6 -->
			<div class="col-sm-6">
			   <img src="<?php echo base_url(); ?>assets/FrontEnd/images/content-rooms-4.jpg" class="wp-image" alt="" />
		   </div><!-- .col-sm-6 -->
	   </div><!-- .row -->
   </section><!-- .container -->
   <hr size="10" width="75%">
   <a name="Standard_Rooms"></a>
   <section class="container content-padding-lg ">
	   	<div class="row">
		   	<div class="col-sm-6">
		   		<div class="gallery-carousel">
		   		<div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/rooms/sa1.jpg" alt="" class="wp-image"></div>
		   		<div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/rooms/sa2.jpg" alt="" class="wp-image"></div>
		   		<div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/rooms/sa3.jpg" alt="" class="wp-image"></div>
		   </div>
		</div><!-- .col-sm-6 -->
		   <div class="col-sm-6">
		   		<h2 class="text-uppercase" id="cove"><small>Starting at $<?php echo $standardRoomPrice ?> / night</small>Standard Rooms</h2>
		   		<p align="justify">
		   		These rooms are simple, yet comfortably appointed.
		   		In order to ensure a pleasant stay at Far Inn Beach Hoetel,
		   		we provide carefully-selected amenities and other modern facilities to ensure relaxation.</p>
		   		<ul class="list-pointer">
		   			<li>[Floor space] 19.4sqm/251sq.ft.  </li>
		   			<li>[Bed-sized(mm)] 940x1,970  </li>
		   			<li>[Number of rooms] 10   </li>
		   			<br><br><br>
		   			<a href="<?php echo base_url(); ?>index.php#reservation" button type="button" class="btn btn-block btn-primary" >Book The Standard Room Now</a>
		   		</ul>
		   </div><!-- .col-sm-6 -->
	   </div><!-- .row -->
   </section><!-- .container -->
   <hr size="10" width="75%">
   <a name="Suite_Room"></a>
   <section class="container content-padding-lg ">
	   <div class="row">
		   <div class="col-sm-6">
			   <h2 class="text-uppercase" id="cove"><small>Starting at $<?php echo $suiteRoomPrice ?> / night</small>Suite Room</h2>
			   <p align="justify">
			   The spacious, chic entrance and warm modern tones give this room a city-style atmosphere while providing the peace and relaxation one expects from a resort.?On days when the sky is clear,
			   chilaw sea can be seen in the distance from the large windows.
			   </p>
			   <ul class="list-pointer">
				   <li>[Floor space] 23.4sqm/251sq.ft.  </li>
				   <li>[Bed-sized(mm)] 940x1,970  </li>
				   <li>[Number of rooms] 10</li>
				   <br><br><br>
				   <a href="<?php echo base_url(); ?>index.php#reservation" button type="button" class="btn btn-block btn-primary">Book The Suite Room Now</a>
			   </ul>
			</div><!-- .col-sm-6 -->
			<div class="col-sm-6">
			   <div class="gallery-carousel">
			   <div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/rooms/su1.jpg" alt="" class="wp-image"></div>
			   <div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/rooms/su2.jpg" alt="" class="wp-image"></div>
			   <div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/rooms/su3.jpg" alt="" class="wp-image"></div>
			</div>
			</div><!-- .col-sm-6 -->
	</div><!-- .row -->
   </section><!-- .container -->
   <hr size="10" width="75%">
   <a name="Delux_Room"></a>
   <section class="container content-padding-lg ">
	   <div class="row">
		   <div class="col-sm-6">
			   <div class="gallery-carousel">
				   <div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/rooms/de2.jpg" alt="" class="wp-image"></div>
				   <div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/rooms/de1.jpg" alt="" class="wp-image"></div>
				   <div class="item"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/rooms/de3.jpg" alt="" class="wp-image"></div>
			   </div>
			</div><!-- .col-sm-6 -->
			   <div class="col-sm-6">
				   <h2 class="text-uppercase" id="cove"><small>Starting at $<?php echo $diluxRoomPrice ?> / night</small>Delux Room</h2>
				   <p align="justify">
				   	Our high-quality rooms offer exquisitely elegant tones and the warmth of natural materials,
				  	all designed to provide a soothing, luxurious place for our guests to unwind at their leisure.
				   	All guest rooms have wired and wireless LAN connections.
				   	Available for both business and private use.</p>
			   	   	<ul class="list-pointer">
					   <li>[Floor space] 25.2sqm/270sq.ft.  </li>
					   <li>[Bed-sized(mm)] 1,100x2,000  </li>
					   <li>[Number of rooms] 10  </li>
					   <br><br><br>
					   <a href="<?php echo base_url(); ?>index.php#reservation" button type="button" class="btn btn-block btn-primary">Book The Delux Room Now</a>
			   		</ul>
			   </div><!-- .col-sm-6 -->
	   </div><!-- .row -->
   </section><!-- .container -->
   <hr size="10" width="75%">
   <br>
   <a href="#" class="scrollToTop"></a>
   <?php $this->load->view('FrontEnd/include/footer');?>
   </div><!-- #site -->
</body><!-- #body -->
   <!-- All Pages JS -->
   <script src="<?php echo base_url(); ?>assets/FrontEnd/js/jquery.fs.wallpaper.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/FrontEnd/js/owl.carousel.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/FrontEnd/js/jquery.fs.boxer.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/FrontEnd/js/bootstrap.datepicker.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/FrontEnd/js/owl.carousel.min.js"></script>
   <!-- Main JS -->
   <script src="<?php echo base_url(); ?>assets/FrontEnd/js/main.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
