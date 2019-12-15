<?php $this-> load-> view('BackEnd/AdminViews/include/navigation');
   $this-> load-> view('BackEnd/AdminViews/include/header');?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>        
<ul class="breadcrumb">
   <li><a href="<?php echo base_url(); ?>index.php/backend_controller">Home</a></li>
	<li><a href="<?php echo base_url(); ?>index.php/backend_controller/admin_load_tour_List">Tour Reservation List</a></li>
   <li class="active">Edit Tour Reservation</li>
</ul>
<div class="page-title">
   <h2> Edit Tour Reservation</h2>
</div>
<div class="page-content-wrap">
   <div class="row">
      <div class="col-md-12">
         <div class="panel-body">
            <form id="tourReservation" role="form" class="form-horizontal" method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>index.php/backend_controller/admin_edit_tour_details" >
               <div class="panel panel-default" id="add">
                  <div class="panel-heading" style="background-color:#33414E;">
                     <h4 class="panel-title" style="color:white" ><span class="fa fa-car"></span><strong> &#160; Edit </strong> Tour Reservation </h4>
                  </div>
                  <br><br>
                  <div class="form-group">
                     <br><br>
                     <label class="col-md-3 control-label">Reservation ID:</label>
					  <input type="hidden" name='tr_id' value="<?php echo $tour[0]->tour_reservation_id; ?>">
                     <div class="col-md-3">
                        <select id="resId" name="resId" class="validate[required]  form-control">
                        <?php 
                           if (count($resId)) 
                           {
                              echo "<option  value=''> -- Select Banquet -- </option>";
                              foreach ($resId as $list) 
                              {  
						?>
                              <option  value="<?php echo $list['reservation_no']; ?>" <?php if($tour[0]->reservation_no == $list['reservation_no']){echo "selected";} ?>> R00 <?php echo $list['reservation_no']; ?></option>";  
						 <?php
                              }
                           }                                                
                           ?>
                        </select>
                        <span class="help-block"> Required </span>                                                   
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label">Tour Package:</label>
                     <div class="col-md-3">
                        <select id="package" name="package" class="validate[required]  form-control">
                        <?php 
                           if (count($packages)) 
                           {
                              echo "<option  value=''> -- Select Package -- </option>";
                              foreach ($packages as $list) 
                              { 
						?>
                              <option value="<?php echo $list['package_id']; ?>" <?php if($tour[0]->package_id == $list['package_id']){echo "selected";} ?>><?php echo $list['package_name']; ?></option>                                 
						<?php           
                              }
                           }                                                
                           ?>
                        </select>
                        <span class="help-block"> Required </span>                                                   
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label">Intended Travel Date:</label>
                     <div class="col-md-5">
                        <input type="text" class="validate[required,custom[date]] form-control datepicker" value="<?php echo $tour[0]->date; ?>" id="date" name="date">
                        <span class="help-block">Required, date YYYY-MM-DD</span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label">Strating Time:</label>
                     <div class="col-md-5">
                        <div class="input-group bootstrap-timepicker">
                           <input type="text" class=" form-control timepicker24"/ name="time" id="time" value="<?php echo $tour[0]->time; ?>">
                           <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                        </div>
                        <span class="help-block"> Required </span> 
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label">Participation:</label>
                     <div class="col-md-2">
                        <input type="number" min=1 max=10 class="validate[required] form-control" id="participant" name="participant" placeholder="Participant #" value='<?php echo $tour[0]->participant; ?>'/><br>
                        <span class="help-block"> Required </span> 
                     </div>
                     <span class="help-block"> (age above 14 years) </span> 
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label">Meal Plan:</label>
                     <div class="col-md-3">
                        <select id="meal" name="meal" class="validate[required]  form-control">
                           <option value="">Select Meal Plan</option>
                           <option value="yes" <?php if(count($tour[0]->meal_cost) > 0){echo "selected";} ?>>With Meal Plan</option>
                           <option value="no" value="yes" <?php if(count($tour[0]->meal_cost) == 0){echo "selected";} ?>>Without Meal Plan</option>
                        </select>
                        <span class="help-block"> Required </span>                                                   
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label">Special Requirment:</label>
                     <div class="col-md-5">
                        <textarea class="form-control" rows="5" name="requirment" id="requirment"><?php echo $tour[0]->description; ?></textarea>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label"></label>
                     <div class="col-md-5">
					  <input type="submit" class="btn btn-primary " onClick="formValidate();" id="btnNext" name='Update' value="Update Tour">
                     </div>
                  </div>




                  
               </div>
                <br><br>

      </form>

   </div>
</div>
</div>
</div>



         <div class="message-box message-box-success animated fadeIn" id="message-box-success">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-check"></span> SUCCESS</div>
                    <div class="mb-content">
                        <p style="font-size:15px">Banquet Reservation data has been SUCCESSFULLY stored into the dDatabase. </p>
                    </div>
                    <div class="mb-footer">
                        <button class="btn btn-default btn-lg pull-right mb-control-close" id="success_close">OK</button>
                    </div>
                </div>
            </div>
         </div>


         <div class="message-box message-box-danger animated fadeIn" id="message-box-danger">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-times"></span> ERROR</div>
                    <div class="mb-content">
                        <p style="font-size:15px"> Banquet Reservation data has been UNSUCCESSFUL. </p>
                          </div>
                    <div class="mb-footer">
                        <button class="btn btn-default btn-lg pull-right mb-control-close" id="error_close">OK</button>
                    </div>
                </div>
            </div>
        </div>
     
     
<!-- individual js -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<!-- individual js -->
<script type="text/javascript">
   jQuery(document).ready( function() {
      jQuery("#tourReservation").validationEngine();
   });
   
   
   function formValidate()
   {
    jQuery("#tourReservation").validationEngine();
   }
   
     $('#success_close').click(function() {
              $("#message-box-success").hide(); 
       });

   $('#error_close').click(function() {
              $("#message-box-danger").hide(); 
       });
   
   
   
   
</script>

