
<?php 
$this->load->view('FrontEnd/include/header');
$this->load->view('FrontEnd/include/include');
?>
<link href="<?php echo base_url(); ?>assets/FrontEnd/css/owl.theme.default.min.css" rel="stylesheet" media="screen"><link href="<?php echo base_url(); ?>assets/FrontEnd/css/jquery.fs.wallpaper.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>assets/FrontEnd/css/jquery.fs.boxer.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>assets/FrontEnd/css/jquery.fs.wallpaper.css" rel="stylesheet" media="screen">
</head>
		<body >
		<div id="site">
		  	<header id="header" class="header-content-contact"  role="banner">
		  		<div class="header-row ">

<?php 
$this->load->view('FrontEnd/include/navigation');
?>

		  	<div id="page-heading">
		  			<div class="container">
		  				<div class="row">
		  					<div class="col-sm-12">
		  						<h1 class="page-title">Gallery</h1>
		  					</div><!-- .col-sm-12 -->
		  				</div><!-- .row -->
		  			</div><!-- .container -->
		  		</div><!-- #page-heading -->
		  	</header><!-- #header -->
<article id="content">
		  		<section class="container content-padding-lg">
		  			<div class="row animated">
		  				<div class="col-sm-12">
		  					<ul class="list-inline" id="isotope-filter">
		  						
		  						<li class="selected" data-filter="*"><a href="#">All</a></li>
		  						<li><a href="#" data-filter=".fun">Accomodation</a></li>
		  						<li><a href="#" data-filter=".beach">Facilities</a></li>
		  						<li><a href="#" data-filter=".historical">Tours</a></li>
		  						<li><a href="#" data-filter=".nightlife">Banquet</a></li>
		  						
		  					</ul><br />
		  					<div id="isotope" data-isotope-options='{ "layoutMode": "horizontal", "itemSelector": ".item" }'>
								<div class="item beach">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/1.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/1.jpg" alt="" /></a>
		  					
								</div>
								<div class="item beach">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/2.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/2.jpg" alt="" /></a>
		  					
								</div>
							<div class="item beach">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/3.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/3.jpg" alt="" /></a>
		  					
								</div>
							<div class="item beach">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/4.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/4.jpg" alt="" /></a>
		  					
								</div>
								<!-- <div class="item beach">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/5.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/5.jpg" alt="" /></a>
		  					
								</div> -->
								<div class="item fun">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/6.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/6.jpg" alt="" /></a>
		  					
								</div>
							<div class="item fun">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/7.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/7.jpg" alt="" /></a>
		  					
								</div>
							<div class="item fun">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/8.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/8.jpg" alt="" /></a>
		  					
								</div>
								<div class="item fun">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/9.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/9.jpg" alt="" /></a>
		  					
								</div>
								<!-- <div class="item fun">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/10.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/10.jpg" alt="" /></a>
		  					
								</div> -->
								<div class="item historical">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/11.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/11.jpg" alt="" /></a>
		  					
								</div>
								<div class="item historical">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/12.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/12.jpg" alt="" /></a>
		  					
								</div>
								
								<div class="item historical">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/13.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/13.jpg" alt="" /></a>
		  					
								</div>
								
								<div class="item historical">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/14.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/14.jpg" alt="" /></a>
		  					
								</div>
								<!-- <div class="item historical">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/15.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/15.jpg" alt="" /></a>
		  					
								</div> -->
								<div class="item nightlife">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/16.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/16.jpg" alt="" /></a>
		  					
								</div>
								<div class="item nightlife">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/17.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/17.jpg" alt="" /></a>
		  					
								</div>
								<div class="item nightlife">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/17.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/18.jpg" alt="" /></a>
		  					
								</div>
								<div class="item nightlife">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/19.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/19.jpg" alt="" /></a>
		  					
								</div>
								<!-- <div class="item nightlife">
									<a href="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/20.jpg" rel="lightbox" class="link-image" title="Etiam habebis sem dicantur magna mollis euismod">
									<img class="wp-image" src="<?php echo base_url(); ?>assets/FrontEnd/images/gallery/20.jpg" alt="" /></a>
		  					
								</div> -->
								
								
								
								
							</div>
		  				</div>
		  			</div><!-- .row -->
		  		</section><!-- .container -->
		  	</article><!-- #content -->

	<a href="#" class="scrollToTop"></a>

	<?php $this->load->view('FrontEnd/include/footer');?>

		</div><!-- #site -->
		 <!-- Individual JS -->
	     <script src="<?php echo base_url(); ?>assets/FrontEnd/js/isotope.pkgd.min.js"></script>
		
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
	    background-image:url('assets/FrontEnd/images/arrow.png');
	    background-color: gray;
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

	</body>



<!-- Mirrored from demo.curlythemes.com/leisure-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jul 2015 05:11:22 GMT -->
</html>