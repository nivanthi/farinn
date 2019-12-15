

<?php 
   /***************************************
   * Author : Nivanthi
   * Created Date: 2015-07-25
   * Description: front end home page module
   ****************************************/
   
     $this->load->view('FrontEnd/include/header');
     $this->load->view('FrontEnd/include/include');
   ?>
<div id="site">
   <header id="header" role="banner">
      <div class="header-row ">
         <?php 
            $this->load->view('FrontEnd/include/navigation');
            ?>
         <div class="booking-row content-padding-xs">
            <div class="container">
               <div class="row">
                  <form id="booking-form" name="booking-form" action="javascript:bookingformeNext();">
                     <div class="col-md-4 col-sm-6 icon-calendar ">
                        <input type="text" class="form-control" data-provide="datepicker" data-date-start-date="+0d" data-date-autoclose="true" id="arrival_date" name="arrival_date" placeholder="Arrival Date">
                     </div>
                     <div class="col-md-4 col-sm-6 icon-calendar ">
                        <input type="text" class="form-control" data-provide="datepicker" data-date-start-date="+0d" data-date-autoclose="true"  id="departure_date" name="departure_date" placeholder="Departure Date">
                     </div>
                     <div class="col-md-2  ">
                        <input type="number" min=1 max=5 class="form-control" id="room_count" name="room_count" placeholder="Room #">
                     </div>
                     <div class="col-md-2 col-sm-4 ">                        
                        <button type="submit" class="btn btn-primary"  name="booking" target="_blank" >Book Now</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </header>
   <a name="about_us"></a>
   <article id="content">
      <section class="container content-padding-lg">
         <div class="row animated">
            <div class="col-sm-8 col-sm-offset-2 text-center">
               <h1 class="text-center"><small>A heavenly place pure enjoyment in a warm city!</small>CHILAW FAR INN BEACH HOTEL</h1>
               <p class="lead">Managed under the Chilaw Far Inn group of hotels, Chilaw Far Inn beach is the newest addition to the group.</p>
               <p algin="justify">
                  Located in Chilaw with close proximity to the main town, Chilaw Far Inn Beach is a beautiful holiday destination overlooking the beautiful Chilaw beach.
                  From tourist favorites to other local attractions, you can conveniently access all the best connections within the vicinity of our hotel.
               <p>Our banquet is immaculately designed to host your special events together with meeting and conference facilities.
                  Indulge in the beautiful beach surroundings and immerse yourselves in the lavish comforts the hotel has to offer when you stay at Chilaw Far Inn Beach.
               </p>
               </p>
            </div>
         </div>
      </section>
      <section >
         <div id="slider">
            <div>
               <div>
                  <h1>&nbsp;</h1>
               </div>
               <div>
                  <h1>&nbsp;</h1>
               </div>
               <div>
                  <h1>&nbsp;</h1>
               </div>
               <div>
                  <h1>&nbsp;</h1>
               </div>
            </div>
         </div>
      </section>
      <a name="facilities"></a>
      <section class="container content-padding-lg">
         <div class="row animated">
            <aside class="col-sm-12">
               <h2 class="text-center"><small>Enjoy our hospitality, make your self at home!</small>FACILITIES</h2>
               <div class="services-carousel">
                  <div class="item">
                     <a href="" class=""><img src="<?php echo base_url(); ?>assets/FrontEnd/images/facilities/food.jpg" alt=""></a>
                     <div class="item-content">
                        <h4><a href="activities.html">International Cuisine for all Your Tastest</a></h4>
                        <p align="justify">Food is an essential to life!At far inn beach we stand aside from the commoners and pledge to serve the souls who grace our dwelling the finest health food, in an irresistible manner. </p>
                     </div>
                  </div>
                  <div class="item">
                     <a href="" class=""><img src="<?php echo base_url(); ?>assets/FrontEnd/images/facilities/beverage.jpg" alt=""></a>
                     <div class="item-content">
                        <h4><a href="children.html">Beverages included</a></h4>
                        <p align="justify">
                           Food is an essential to life!At far inn beach we stand aside from the commoners and pledge to serve the souls who grace our dwelling the finest health food, in an irresistible manner. 
                        </p>
                     </div>
                  </div>
                  <div class="item">
                     <a href="" class=""><img src="<?php echo base_url(); ?>assets/FrontEnd/images/facilities/pool.jpg" alt=""></a>
                     <div class="item-content">
                        <h4><a href="dining.html">Indoor &amp; Outdoor Swimming Pools</a></h4>
                        <p align="justify">Relax yourself being submerged in crystal clear waters. Immerse yourself in the pool early morning; take a pre dinner dip, or soak up the sun all day long whatever suits your preference. </p>
                     </div>
                  </div>
                  <div class="item">
                     <a href="" class=""><img src="<?php echo base_url(); ?>assets/FrontEnd/images/facilities/sport.jpg" alt=""></a>
                     <div class="item-content">
                        <h4><a href="activities.html">Sport Complex</a></h4>
                        <p align="justify">The fully equipped sports complex will accommodate a gym, a multipurpose hall for yoga and other sporting activities to ensure that you keep fit, even when on vacation. </p>
                     </div>
                  </div>
                  <div class="item">
                     <a href="" class=""><img src="<?php echo base_url(); ?>assets/FrontEnd/images/facilities/conference.jpg" alt=""></a>
                     <div class="item-content">
                        <h4><a href="rooms.html">Conference Room Facilities</a></h4>
                        <p align="justify">Farinn Beach understands the importance of meetings which is why we offer a variety of meeting space options. Most of our hotels offer nicely appointed board rooms, perfect for your intimate business meeting. </p>
                     </div>
                  </div>
                  <div class="item">
                     <a href="" class=""><img src="<?php echo base_url(); ?>assets/FrontEnd/images/facilities/spa.jpg" alt=""></a>
                     <div class="item-content">
                        <h4><a href="activities.html">Ayurveda Spa</a></h4>
                        <p align="justify">Experience the therapeutic touch at he ayurveda Spa with offer a range of specialized treatments to refresh your spirit and invigorate your mind, body and soul. </p>
                     </div>
                  </div>
               </div>
               <!-- .services-carousel -->  
            </aside>
            <!-- .col-sm-12 -->
         </div>
      </section>
   </article>
   <a href="#" class="scrollToTop"></a>
   <?php $this->load->view('FrontEnd/include/footer');?>
</div>
<!-- #site -->
<!-- All Pages JS -->
<!-- Individual JS -->   
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/bootstrap.datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/jquery.stellar.min.js"></script>
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
   .help-block{
   color: red;
   }
</style>
<!--virtual tour-->
<link href="<?php echo base_url(); ?><?php echo base_url(); ?>assets/FrontEnd/panaroma/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/FrontEnd/panaroma/css/panorama-slider.min.css" rel="stylesheet">
<style>
   #slider {
   height: 500px;
   background-image: url("<?php echo base_url(); ?>assets/FrontEnd/panaroma/img/panorama.jpg");
   }
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/FrontEnd/panaroma/js/panorama-slider.min.js"></script>

<script type="text/javascript">
   $('#slider').pslider();
   
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
   function bookingformeNext() {    
      
      var tab1Data = $("form#booking-form").serialize();
      var count =  $('#room_count').val();
      var ad =  $('#arrival_date').val();
      var dd =  $('#departure_date').val();
            $.ajax({
                 type: "POST",
                 url: "<?php echo base_url();?>index.php/frontEnd/get_room_availability", //name of the controller method
                 data: {tab1Data:tab1Data },
                 success: function(response) {  
                     if(response==1)
                        window.open("<?php echo base_url();?>index.php/frontEnd/reservation?count="+ count +"&ad="+ad+"&dd="+dd+"");
                    else
                        alert("No rooms are not available please select another date!");                     
                 },
                 error: function(errorThrown) {
                        alert("error");
                 }
             });
           
           //action="<?php echo base_url(); ?>index.php/frontEnd/reservation">
   
   };
</script>
<!-- validaton JS -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/FrontEnd/validation/dist/js/formValidation.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/FrontEnd/validation/dist/js/framework/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/FrontEnd/js/jquery.stellar.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
   
   
    $('#booking-form').formValidation({
        message: 'This value is not valid',
        icon: {
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {             
   
               arrival_date: {
                   validators: {
                       notEmpty: {
                           message: 'Please Select the Arrival Date'
                       },
                   }
               },
   
                departure_date: {
                   validators: {
                       notEmpty: {
                           message: 'Please Select the Depature Date'
                       },
                   }
               },
   
                room_count: {
                   validators: {
                       notEmpty: {
                           message: 'Please Select a Room count'
                       },
                   }
               },
   
            }
       });
   });
</script>

