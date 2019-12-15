 <?php $this-> load-> view('BackEnd/AdminViews/include/navigation');
  $this-> load-> view('BackEnd/AdminViews/include/header');?>

      <style type="text/css">

      .panel .profile .profile-image img {
        width: 70px;
        border: 2px solid #FFF;
        -moz-border-radius: 40%;
        -webkit-border-radius: 40%;
        border-radius: 40%;
      }

      </style> 


       <ul class="breadcrumb">
             <li><a href="<?php echo base_url();?>index.php/backend_controller"><i class="fa fa-dashboard"></i> Home</a></li>
            </ul>
          <div class="page-title">
         <h2> <?php echo $title ?></h2>
   </div>
          

            <div class="page-content-wrap">
               <div class="row">
                  <div class="col-md-12">
                     <div class="panel panel-default">
                                  <div class="row">
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url(); ?>assets/BackEnd/images/icons/guest1.png" alt="Nadia Ali"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Guest Information</div>
                                        <div class="profile-data-title">VISITORS</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="<?=base_url('index.php/backend_controller/guest_management/add');?>" class="profile-control-left"><span class="fa fa-plus"></span></a>
                                        <a href="<?=base_url('index.php/backend_controller/guest_management');?>" class="profile-control-right"><span class="fa fa-list"></span></a>
                                        
                                    </div>
                                </div>                                
                                                            
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                          <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url(); ?>assets/BackEnd/images/icons/user.png" alt="Nadia Ali"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">User Information</div>
                                        <div class="profile-data-title">EMPLOYEES</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="<?=base_url('index.php/backend_controller/user_management/add');?>" class="profile-control-left"><span class="fa fa-plus"></span></a>
                                        <a href="<?=base_url('index.php/backend_controller/user_management');?>" class="profile-control-right"><span class="fa fa-list"></span></a>
                                    </div>
                                </div>                                
                                                            
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                       
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url(); ?>assets/BackEnd/images/icons/food.png" alt="Nadia Ali"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Food Information</div>
                                        <div class="profile-data-title">MENU</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="<?=base_url('index.php/backend_controller/food_management/add');?>" class="profile-control-left"><span class="fa fa-plus"></span></a>
                                        <a href="<?=base_url('index.php/backend_controller/food_management');?>" class="profile-control-right"><span class="fa fa-list"></span></a>
                                    </div>
                                </div>                                
                                                            
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url(); ?>assets/BackEnd/images/icons/beverage1.png" alt="Nadia Ali"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Beverage Information</div>
                                        <div class="profile-data-title">MENU</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="<?=base_url('index.php/backend_controller/beverage_management/add');?>" class="profile-control-left"><span class="fa fa-plus"></span></a>
                                        <a href="<?=base_url('index.php/backend_controller/beverage_management');?>" class="profile-control-right"><span class="fa fa-list"></span></a>
                                    </div>
                                </div>                                
                                                            
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                    </div>
                     <div class="row">                     
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url(); ?>assets/BackEnd/images/icons/roomType.png" alt="Nadia Ali"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Room Type Information</div>
                                        <div class="profile-data-title">VARITY OF ROOMS</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="<?=base_url('index.php/backend_controller/room_type_management/add');?>" class="profile-control-left"><span class="fa fa-plus"></span></a>
                                        <a href="<?=base_url('index.php/backend_controller/room_type_management');?>" class="profile-control-right"><span class="fa fa-list"></span></a>
                                    </div>
                                </div>                                
                                                            
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url(); ?>assets/BackEnd/images/icons/basis.png" alt="Nadia Ali"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Room Basis Information</div>
                                        <div class="profile-data-title">LOCAL & FOREIGN PRICES</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="<?=base_url('index.php/backend_controller/room_basis_management/add');?>" class="profile-control-left"><span class="fa fa-plus"></span></a>
                                        <a href="<?=base_url('index.php/backend_controller/room_basis_management');?>" class="profile-control-right"><span class="fa fa-list"></span></a>
                                    </div>
                                </div>                                
                                                            
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url(); ?>assets/BackEnd/images/icons/room.png" alt="Nadia Ali"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Room Information</div>
                                        <div class="profile-data-title">ACCOMADATION</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="<?=base_url('index.php/backend_controller/room_management/add');?>" class="profile-control-left"><span class="fa fa-plus"></span></a>
                                        <a href="<?=base_url('index.php/backend_controller/room_management');?>" class="profile-control-right"><span class="fa fa-list"></span></a>
                                    </div>
                                </div>                                
                                                            
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url(); ?>assets/BackEnd/images/icons/tour.png" alt="Nadia Ali"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Tour Information</div>
                                        <div class="profile-data-title">LOCATIONS TO VISIT</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="<?=base_url('index.php/backend_controller/tour_management/add');?>" class="profile-control-left"><span class="fa fa-plus"></span></a>
                                        <a href="<?=base_url('index.php/backend_controller/tour_management');?>" class="profile-control-right"><span class="fa fa-list"></span></a>
                                    </div>
                                </div>                                
                                                            
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
          
                    </div>
                    <div class="row">                     
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url(); ?>assets/BackEnd/images/icons/banquet.png" alt="Nadia Ali"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Banquet Information</div>
                                        <div class="profile-data-title">HALL</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="<?=base_url('index.php/backend_controller/banquet_hall_management/add');?>" class="profile-control-left"><span class="fa fa-plus"></span></a>
                                        <a href="<?=base_url('index.php/backend_controller/banquet_hall_management');?>" class="profile-control-right"><span class="fa fa-list"></span></a>
                                    </div>
                                </div>                                
                                                            
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="<?php echo base_url(); ?>assets/BackEnd/images/icons/banquetMenu.png" alt="Nadia Ali"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">Banquet Menu Information</div>
                                        <div class="profile-data-title">FUNCTION MENU</div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="<?=base_url('index.php/backend_controller/banquet_menu_management/add');?>" class="profile-control-left"><span class="fa fa-plus"></span></a>
                                        <a href="<?=base_url('index.php/backend_controller/banquet_menu_management');?>" class="profile-control-right"><span class="fa fa-list"></span></a>
                                    </div>
                                </div>                                
                                                            
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                       
                      </div>
                     </div>
                  </div>
               </div>
            </div>  