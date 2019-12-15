<?php $this-> load-> view('BackEnd/AdminViews/include/navigation'); $this-> load-> view('BackEnd/AdminViews/include/header');?>
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/BackEnd/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/BackEnd/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/BackEnd/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/BackEnd/plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/BackEnd/dist/css/adminlte.min.css">
<style>
	.footer{
		position: fixed;
   		bottom: 0;
		color: #9E9999;
		padding: 10px;
	}
</style>
<div class="page-title">
	<h2> Hotel Farinn Dashboard</h2>
</div>



<div class="page-content-wrap">
	<div class="row">
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-info">
				<div class="inner">
					<h3>80</h3>

					<p>Total Rooms</p>
				</div>
				<div class="icon">
					<i class="fas fa-hotel"></i>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-success">
				<div class="inner">
					<h3>53</h3>

					<p>Total Booking</p>
				</div>
				<div class="icon">
					<i class="far fa-calendar-alt"></i>
				</div>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-warning">
				<div class="inner">
					<h3>3</h3>

					<p>Total Events for <?php echo date('F'); ?></p>
				</div>
				<div class="icon">
					<i class="far fa-calendar-check"></i>
				</div>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-danger">
				<div class="inner">
					<h3>26</h3>

					<p>Total Guest</p>
				</div>
				<div class="icon">
					<i class="ion ion-pie-graph"></i>
				</div>
			</div>
		</div>
		
		<div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">News</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="<?php echo base_url(); ?>Assets/BackEnd/images/1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo base_url(); ?>Assets/BackEnd/images/2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo base_url(); ?>Assets/BackEnd/images/3.jpg" alt="Third slide">
                    </div>
					<div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo base_url(); ?>Assets/BackEnd/images/4.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
		
		<div class="col-md-6">
		<div class="card">
			<div class="card-header">
                <h3 class="card-title">Card Promotion Offers</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
		  <div class="row">
			  
                  <div class="col-sm-4"><br><br><br>
                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                      <div class="ribbon-wrapper">
                        <div class="ribbon bg-warning">
							<small style="font-size: 10px;">40% Off</small>
                        </div>
                      </div>
                      Sampath Bank <br />
                      <small>Room + Pool 1 Day Stay</small>
						<img src="<?php echo base_url(); ?>Assets/BackEnd/images/c_promo1.png">
                    </div>
                  </div>
                  <div class="col-sm-4"><br><br><br>
                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                      <div class="ribbon-wrapper">
                        <div class="ribbon bg-info">
                          20% off
                        </div>
                      </div>
                      NTB Bank <br />
                      <small>Room + Pool 1 Day Stay</small>
						<img src="<?php echo base_url(); ?>Assets/BackEnd/images/c_promo2.png">
                    </div>
                  </div>
                  <div class="col-sm-4"><br><br><br>
                    <div class="position-relative p-3 bg-gray" style="height: 180px">
                      <div class="ribbon-wrapper">
                        <div class="ribbon bg-danger">
                          45% off
                        </div>
                      </div>
                      HSBC <br />
                      <small>Room + Pool 1 Day Stay</small>
						<img src="<?php echo base_url(); ?>Assets/BackEnd/images/c_promo3.png">
                    </div>
                  </div>
			  
				  </div>
                </div>
			</div></div>
		

	</div>
</div>
<footer class="footer">
    
    <strong>Copyright &copy; 2019 Developed by: Nivanthi Wijerathna All rights
    reserved.
  </footer>

<!-- jQuery -->
<script src="<?php echo base_url(); ?>Assets/BackEnd/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>Assets/BackEnd/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
