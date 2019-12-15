

<?php $this-> load-> view('BackEnd/AdminViews/include/navigation');
   $this-> load-> view('BackEnd/AdminViews/include/header');?>



   <ul class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/backend_controller"><i class="fa fa-dashboard"></i> Home</a></li>   
   
   </ul>

<div class="page-title">
    <h2><span class="fa fa-cogs"></span> Profile </h2>
</div>




<div class="page-content-wrap">
   <div class="row">
      <div class="col-md-12">
         <div class="panel panel-default">
            <div class="panel-body">                  
               <div class="row">
                  <div class="col-md-3 col-sm-4 col-xs-5">
                     <form action="#" class="form-horizontal">
                        <div class="panel panel-default">
                           <div class="panel-body">
                              <div class="text-center" id="user_image">
                                 <img src="<?php echo base_url(); ?>assets/BackEnd/images/users/<?php echo $profile[0]['photo'] ?> " class="img-thumbnail"/>  
                              </div>
                           </div>
                           <div class="panel-body form-group-separated">                       
                              <div class="form-group">
                                 <label class="col-md-3 col-xs-5 control-label">#ID</label>
                                 <div class="col-md-9 col-xs-7">
                                    <input type="text" value="<?php echo $profile[0]['admin_id'] ?>"class="form-control" disabled/>
                                 </div>
                              </div>

                              <div class="form-group">
                                 <label class="col-md-3 col-xs-5 control-label">E-mail</label>
                                 <div class="col-md-9 col-xs-7">
                                    <input type="text" value="<?php echo $profile[0]['email'] ?>" class="form-control"/>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-md-12 col-xs-12">
                                    <a href="#" class="btn btn-danger btn-block btn-rounded" data-toggle="modal" data-target="#modal_change_password">Change password</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6 col-sm-8 col-xs-7">
                     <form action="#" class="form-horizontal">
                        <div class="panel panel-default">
                           <div class="panel-body">
                              <h3><span class="fa fa-pencil"></span> Profile</h3>
                              <p> &nbsp; &nbsp; &nbsp; &nbsp;Edit your profile</p>
                           </div>
                           <div class="panel-body form-group-separated">
                              <div class="form-group">
                                 <label class="col-md-3 col-xs-5 control-label">First Name</label>
                                 <div class="col-md-9 col-xs-7">
                                    <input type="text" value="<?php echo $profile[0]['firstname'] ?>" class="form-control"/>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 col-xs-5 control-label">Last Name</label>
                                 <div class="col-md-9 col-xs-7">
                                    <input type="text" value="<?php echo $profile[0]['lastname'] ?>" class="form-control"/>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 col-xs-5 control-label"> NIC Number</label>
                                 <div class="col-md-9 col-xs-7">
                                    <input type="text" value="<?php echo $profile[0]['NIC'] ?>" class="form-control"/>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-md-3 col-xs-5 control-label">Contact No</label>
                                 <div class="col-md-9 col-xs-7">
                                    <input type="text" value="<?php echo $profile[0]['phone'] ?>" class="form-control"/>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-md-12 col-xs-5">
                                    <button class="btn btn-primary btn-rounded pull-right">Save</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-3">
                     <div class="panel panel-default form-horizontal">
                        <div class="panel-body">
                           <h3><span class="fa fa-info-circle"></span> Quick Info</h3>
                           <p>Some quick info about this user</p>
                        </div>
                        <div class="panel-body form-group-separated">
                           <div class="form-group">
                              <label class="col-md-4 col-xs-5 control-label">Last visit</label>
                              <div class="col-md-8 col-xs-7 line-height-30">12:46 27.11.2015</div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 col-xs-5 control-label">Registration</label>
                              <div class="col-md-8 col-xs-7 line-height-30">  
                                <?php echo date("d-M-Y", strtotime($profile[0]['reg_date'])); ?></div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-4 col-xs-5 control-label">Groups</label>
                              <div class="col-md-8 col-xs-7 line-height-30"> 
                                <?php 
                                  $level = $profile[0]['admin_level'] ;
                                  if($level == 1)
                                      $level_name = 'Administrator';
                                  elseif($level == 2)
                                      $level_name = 'Front Officer';
                                      echo $level_name;
                                  ?>
                             </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>                                               
         </div>
      </div>
      <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
         <div class="mb-container">
            <div class="mb-middle">
               <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
               <div class="mb-content">
                  <p>Are you sure you want to log out?</p>
                  <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
               </div>
               <div class="mb-footer">
                  <div class="pull-right">
                     <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                     <button class="btn btn-default btn-lg mb-control-close">No</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal animated fadeIn" id="modal_change_password" tabindex="-1" role="dialog" aria-labelledby="smallModalHead" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="smallModalHead">Change password</h4>
               </div>
               <div class="modal-body">
                  <p>.......</p>
               </div>
               <div class="modal-body form-horizontal form-group-separated">
                  <div class="form-group">
                     <label class="col-md-3 control-label">Old Password</label>
                     <div class="col-md-9">
                        <input type="password" class="form-control" name="old_password"/>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label">New Password</label>
                     <div class="col-md-9">
                        <input type="password" class="form-control" name="new_password"/>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label">Repeat New</label>
                     <div class="col-md-9">
                        <input type="password" class="form-control" name="re_password"/>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Proccess</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>

      <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
         <div class="slides"></div>
         <h3 class="title"></h3>
         <a class="prev">‹</a>
         <a class="next">›</a>
         <a class="close">×</a>
         <a class="play-pause"></a>
         <ol class="indicator"></ol>
      </div>
   </div>
</div>
</div>
</div>
</div>

