<!--
   /***************************************
   * Author : Nivanthi
   * Created Date: 2015-07-25
   * Description: front end tour page module
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
   <header id="header" class="header-content-tour"  role="banner">
      <div class="header-row ">
         <?php 
            $this->load->view('FrontEnd/include/navigation');
            ?>
         <div id="page-heading">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <h1 class="page-title">Places to visits</small></h1>
                  </div>
               </div>
            </div>
         </div>
   </header>
   <!-- #header --> 
   </br><br>
   <article>
     <div class="container content-padding-lg">
       <div class="row">
         <div class="col-sm-3" id="side">
         <aside id="archives-4" class="sidebar-widget widget_archive">
         <h4 class="widget-title">More Surrondings</h4>
         <ul>
         <li><a href="<?php echo base_url(); ?>index.php/FrontEnd/tours#Wilpattu">Wilpaththu National Park</a></li>
         <li><a href="<?php echo base_url(); ?>index.php/FrontEnd/tours#Anawilundawa">Anavilundawa Bird Sanctuary</a></li>
         <li><a href="<?php echo base_url(); ?>index.php/FrontEnd/tours#Kalpitiya">Kalpitiya Dolphing Watching</a></li>
         <li><a href="<?php echo base_url(); ?>index.php/FrontEnd/tours#Munneswaram">Munneshwaram Hindu Temple</a></li>
         <li><a href="<?php echo base_url(); ?>index.php/FrontEnd/tours#Lagoon">Chilaw Lagoon</a></li>
         <li><a href="<?php echo base_url(); ?>index.php/FrontEnd/tours#chilaw">Chilaw City</a></li>
         </ul>
         </aside>
         <aside id="archives-4" class="sidebar-widget widget_archive">
         <h4 class="widget-title">Surronding Map</h4>
         <a href="https://www.google.com/maps/d/edit?mid=zpg1twxAlF-8.kM283nWM6lak" target="blank" id="map"><img src="<?php echo base_url(); ?>assets/FrontEnd/images/tours/map.png" alt="" class="wp-image"></a>
         </div>
         <a name="chilaw"></a>
         <div class="col-sm-8 col-sm-offset-1">
         <h3>Chilaw City</h3>
         <div class="row content-padding-xs">
           <div class="col-sm-6">
           <img src="<?php echo base_url(); ?>assets/FrontEnd/images/tours/C1.jpg" alt="" class="wp-image">
           </div>
           <div class="col-sm-6">
           <p class="" align="justify"> Chilaw, also known as Halavata is situated in the north western province of Sri Lanka. With an approximate distance of 81 kilometers from Colombo the capital city, Chilaw is known for its’ beautiful beach, seafood and coconut plantations.</p>
           <p class="" align="justify">western seaboard town on the island of Sri Lanka.It is a bustling town with a famous fishmarket and beach. In the last few years several hotel developments have emerged in order to cater to the needs of tourists.</p>
           </div>
         </div>
         <hr>
         <a name="Wilpattu"></a>
         <div class="row">
           <div class="col-sm-6">
           <h3>Wilpattu National Park</h3>
           <p class="" align="justify">Wilpattu National Park is located 26 km north of Puttalam and in close proximity to Chilaw city. Covering an impressive 425 sq miles, the park is Sri Lanka largest national park and a popular eco-tourism destination.</p>
           <p class="" align="justify">Wilpattu is a fairly thick dry zone jungle interspersed with a number of flood plain lakes banked with delicate white sands. It boasts an impressive variety of flora in huge expanses of forest, and varied wildlife, including deer, elephants, wild boar, sloth bears and leopards. </p>
           </div>
           <div class="col-sm-6">
           <img src="<?php echo base_url(); ?>assets/FrontEnd/images/tours/V1.jpg" alt="" class="wp-image">
           </div>
         </div>
         <hr>
         <a name="Anawilundawa"></a>
         <h3>Anawilundawa sanctuary</h3>
         <div class="row content-padding-xs">
           <div class="col-sm-6">
           <img src="<?php echo base_url(); ?>assets/FrontEnd/images/tours/A1.jpg" alt="" class="wp-image">
           </div>
           <div class="col-sm-6">
           <p class="" align="justify">Anavilundawa Sanctuary is popularly known among environmentalists and nature lovers as a birds’ paradise, due to its rich biodiversity and large numbers of resident and migratory birds. The environmental and cultural diversity of the Anawilundawa sanctuary area also offers a high potential to be developed as an ecotourism destination in Sri Lanka.</p>
           <p class="" align="justify">The Anawilundawa wetland sanctuary is located between the coast and the Negombo Puttalam railway line, in the Puttalam District of the North western province of Sri Lanka and covers an extent of 1400 hectares. </p>
           </div>
         </div>
         <hr>
         <a name="Kalpitiya"></a>
         <div class="row">
           <div class="col-sm-6">
           <h3>Kalpitiya Dolpin Watching</h3>
           <p class="" align="justify">is located Kalpitiya; a famous tourist destination. Being the peninsular that separates the Puttalam lagoon and the Indian Ocean, Kalpitiya consists of a beautiful beach and biodiversity.</p>
           <p class="" align="justify">Known as the Sri Lankan hotspot for Dolphin watching, it is also located in close proximity to the largest coral reef in Sri Lanka. </p>
           </div>
           <div class="col-sm-6">
           <img src="<?php echo base_url(); ?>assets/FrontEnd/images/tours/D1.jpg" alt="" class="wp-image">
           </div>
         </div>
         <a name="Lagoon"></a>
         <hr>
         <h3>Chilaw Lagoon</h3>
         <div class="row content-padding-xs">
           <div class="col-sm-6">
           <img src="<?php echo base_url(); ?>assets/FrontEnd/images/tours/L1.jpg" alt="" class="wp-image">
           </div>
           <div class="col-sm-6">
           <p class="" align="justify">Situated in the western coast north of Colombo, Chilaw is calm and quite beach city relating to Portuguese and Dutch times and famous for perls with a large fishing community.</p>
           <p class="" align="justify"> Known as the Sri Lankan hotspot for Dolphin watching, it is also located in close proximity to the largest coral reef in Sri Lanka. </p>
           </div>
         </div>
         <hr>
         <a name="Munneswaram"></a>
           <div class="row">
             <div class="col-sm-6">
             <h3>Munneswaram Hindu Temple</h3>
             <p class="" align="justify">An ancient temple situated in Chilaw, Munneswaram is a place that attracts devotees of all religions. Apart from the main Hindu festivals, Navarathri and Shivarathri, the Munneswaram festival is a main even that receives disciples of all communities from different sections of the island.</p>
             </div>
             <div class="col-sm-6">
             <img src="<?php echo base_url(); ?>assets/FrontEnd/images/tours/M1.jpg" alt="" class="wp-image">
             </div>
            </div>
         </div>
         </aside>
       </div>
     </div>
   </article><!-- #content -->
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