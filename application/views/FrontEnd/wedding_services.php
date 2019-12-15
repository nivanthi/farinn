<!--
   /***************************************
   * Author : Nivanthi
   * Created Date: 2015-07-25
   * Description: front end ediing services page module
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
   <header id="header" class="header-content-wed"  role="banner">
      <div class="header-row ">
      <?php 
         $this->load->view('FrontEnd/include/navigation');
         ?>
      <div id="page-heading">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="page-title">Weddings</h1>
               </div>
           
            </div>
          
         </div><!-- .container -->
         
      </div>
     
   </header> <!-- #header -->
  
   <article id="content">
      <section class="container content-padding-lg">
         <div class="row ">
            
            <div class="col-sm-3">
               <br />
               <h2><small>Come and plan your</small>Dream Wedding</h2>
               <p>As you embark on the life long journey with your dearly beloved,select the wedding of your choice with our Hotels. Your ideal dream wedding could be turned into a reality and the most memorable moment of your life.</p>
            </div>
            <div class="col-sm-6 text-center">
               <img src="<?php echo base_url(); ?>assets/FrontEnd/images/weddings/content-events.jpg" class="wp-image" alt="" />
            </div>
            <div class="col-sm-3 text-right">
               <br />
               <h2><small>Always Ready to Help</small>Events Team</h2>
               <p align='right'>From hospitality for bridal groups, to venue decoration and catering (choose from Sri Lankan, International, Oriental, Thai and Indian cuisines), we handle all the details, leaving you free to enjoy yourself.
                  The couple will be provided with personalized assistance for wedding planning and can choose from packages based on their requirements, be it an intimate affair or full scale extravaganza.
            </div>
         </div>
         <!-- .row -->
      </section>
      <!-- .container -->
      <section class="fullwidth-row bg-10 cover fixed parallax-bg " data-stellar-background-ratio="0.423123"></section>
      <section class="container content-padding-lg ">
         <div class="row">
            <div class="col-sm-6">
               <p class="lead">
               <p class="lead">Say I do with Far Inn Beach Hotel!</p>
               <h3>The following complimentary services are offered by the Hotel</h3>
               <ul class="list-unstyled">
                  <li>Traditional oil lamp,Bridal settee and coffee table.</li>
                  <li>Registration table with standard floral arrangement.</li>
                  <li>Floral arrangement at the entrance of the Banquet Hall and standard floral arrangements for all tables.</li>
                  <li>Skirted table for the cake and silver platter for serving the cake.</li>
                  <li>A room, with fruit basket, for the bridal couple on the day of the function.</li>
                  <li>Continental Breakfast for the couple,and a voucher for their first Wedding Anniversary at the Dining Room.</li>
                  <li>Use of the hotel garden and backdrop for photographs.</li>
                  <li>A bottle of French champagne for the couple (over 400 guests).</li>
               </ul>
               </p> 
            </div>
            <!-- .col-sm-6 -->
            <div class="col-sm-6">
               <img src="<?php echo base_url(); ?>assets/FrontEnd/images/whiteBackground copy.jpg" class="wp-image" alt="" />
            </div>
            <!-- .col-sm-6 -->
         </div>
         <!-- .row -->
      </section>
      <!-- .container -->
      <br><br>
      <a name="honeymoon_Package"></a>
      <!-- Honeymoon Package-->
      <section class="fullwidth-row bg-12 fixed cover">
         <div class="container  content-padding-xl">
            <div class="row">
               <div class="col-sm-6"><br>
                  <img src="<?php echo base_url(); ?>assets/FrontEnd/images/weddings/honeymoon.jpg" class="wp-image equal-height" alt="">
               </div>
               <div class="col-sm-6">
                  <div class="white-box content-padding">
                     <h2 class="text-uppercase" id="junior">Honeymoon Packages</h2>
                     <p align="justify">Honeymoon Package At FarInn Beach,it is not only the wedding ceremony that brings a glowing smile to your face. Our honeymoon package ensures that the magical moments of the wedding do not end there. In this breathtaking natural setting romance and fascination go hand-in-hands as we indulge you in a host of lavish luxuries that are just too good to miss out on.</p>
                     <ul class="list-pointer">
                        <li>Romantic candle lit dinner</li>
                        <li>Flower decorations in the room</li>
                        <li>Fruit plates & Chocolate plates</li>
                        <li>private massage on request,bath robes,shaving kit.</li>
                        <li>Sea Bath</li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- .row -->
         </div>
         <!-- .container -->
      </section>
      <br><br>
   </article>
   <!-- #content --> 
   <a href="#" class="scrollToTop"></a>
   <?php $this->load->view('FrontEnd/include/footer');?>
   </div><!-- #body -->
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
