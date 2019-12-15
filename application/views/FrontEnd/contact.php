<!--
   /***************************************
   * Author : Nivanthi
   * Created Date: 2015-07-25
   * Description: front end contact us page module
   ****************************************/
   -->
<?php 
   $this->load->view('FrontEnd/include/header');
   $this->load->view('FrontEnd/include/include');
   ?>
</head>
<body >
   <div id="site">
   <header id="header" class="header-content-contact"  role="banner">
      <div class="header-row ">
         <script type="text/javascript" src="<?php echo base_url(); ?>assets/FrontEnd/validation/dist/js/formValidation.js"></script>
         <script type="text/javascript" src="<?php echo base_url(); ?>assets/FrontEnd/validation/dist/js/framework/bootstrap.js"></script>
         <?php 
            $this->load->view('FrontEnd/include/navigation');
            ?>
         <div id="page-heading">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <h1 class="page-title">Contact</h1>
                  </div>
                  <!-- .col-sm-12 -->
               </div>
               <!-- .row -->
            </div>
            <!-- .container -->
         </div>
         <!-- #page-heading -->
   </header>
   <!-- #header -->
   <article id="content">
       <div> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15820.187677760216!2d79.788659!3d7.569864!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5db1554d6f2d456d!2sFar+Inn+Beach+Hotel!5e0!3m2!1sen!2slk!4v1434373561335" width="100%" height="385" frameborder="0" style="border:0"></iframe>  
       </div>
       <div class="container">
           <div class="row">
               <div class="col-sm-6">
                   <div class="page-header">
                   <br>
                   <h3>Get in touch with us!</h3>
                   </div>
                       <form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url(); ?>index.php/frontEnd/feedback">
                           <div class="form-group">
                               <label class="col-sm-3 control-label">Name</label>
                               <div class="col-sm-8">
                               <input type="text" class="form-control" name="name" id="name" placeholder="" />
                               </div>                                   
                           </div>
                           <div class="form-group">
                           <label class="col-sm-3 control-label">E-mail address</label>
                               <div class="col-sm-8">
                               <input type="text" class="form-control" name="email" id="email" />
                               </div>
                           </div>
                           <div class="form-group">
                               <label class="col-sm-3 control-label">FeedBack</label>
                               <div class="col-sm-8">
                               <textarea  text-input rows="5" cols="50" name="feedback" id="feedback" ></textarea>  
                               </div>
                           </div>
                           <div class="form-group">
                               <div class="col-sm-9 col-sm-offset-3">
                               <button type="submit" class="btn btn-primary" name="submitFeedback" id="submitFeedback" >Submit</button>
                               <br/><br/><br/>
                               </div>
                           </div>
                       </form>
                   </div>
                   <div class="col-sm-6">
                    <div class="page-header">
                    <br>
                        <h3>Stay in touch</h3>
                        <p align='justify'>We have specially designed packages to suit your interests. To find out more please send us the your information and one of our advisors will get back to you with more details.</p><br />
                   </div>
                   <div>
                   <strong>
                       Chilaw Far Inn Beach Hotel
                       Ambakandawila Road, Suduwella,<br>
                       Chilaw, Sri Lanka<br>
                       T : +94 (0) 32 222 2907 / +94 (0) 32 222 2909 <br> 
                       E : beach@chilawfarinn.com<br>   
                       W : www.chilw.com
                   <br><br> <br><br>
                   </strong>
                   </div>
               </div>
           </div>
       </div>
   </article>
   <a href="#" class="scrollToTop"></a>
   <?php $this->load->view('FrontEnd/include/footer');?>
   </div>
   
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
                       
                       feedback: {
                           validators: {
                               notEmpty: {
                                   message: 'The feedback is required'
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
                
              
                          
                       }
                   });
               });
               
               
               
   
   /*$('#submitFeedback').click(function(){ 
    $('#defaultForm').submit();
   });*/
</script>