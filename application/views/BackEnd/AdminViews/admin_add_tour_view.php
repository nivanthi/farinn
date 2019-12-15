<?php $this-> load-> view('BackEnd/AdminViews/include/navigation');
   $this-> load-> view('BackEnd/AdminViews/include/header');?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>        
<ul class="breadcrumb">
   <li><a href="<?php echo base_url(); ?>index.php/backend_controller">Home</a></li>
   <li class="active">Tour Reservation</li>
</ul>
<div class="page-title">
   <h2> Tour Reservation</h2>
</div>
<div class="page-content-wrap">
   <div class="row">
      <div class="col-md-12">
         <div class="panel-body">
            <form id="tourReservation" role="form" class="form-horizontal" method="post" accept-charset="utf-8" action="<?php echo base_url(); ?>index.php/backend_controller/tour_details" >
               <div class="panel panel-default" id="add">
                  <div class="panel-heading" style="background-color:#33414E;">
                     <h4 class="panel-title" style="color:white" ><span class="fa fa-car"></span><strong> &#160; Add </strong> Tour Reservation </h4>
                  </div>
                  <br><br>
                  <div class="form-group">
                     <br><br>
                     <label class="col-md-3 control-label">Reservation ID:</label>
                     <div class="col-md-3">
                        <select id="resId" name="resId" class="validate[required]  form-control">
                        <?php 
                           if (count($resId)) 
                           {
                              echo "<option  value=''> -- Select Banquet -- </option>";
                              foreach ($resId as $list) 
                              {                                                    
                              echo "<option    value=" . $list['reservation_no']." > R00" . $list['reservation_no']." </option>";                                                   
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
                              echo "<option value=" . $list['package_id']." >" . $list['package_name']." </option>";                                                   
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
                        <input type="text" class="validate[required,custom[date]] form-control datepicker" value="" id="date" name="date">
                        <span class="help-block">Required, date YYYY-MM-DD</span>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label">Strating Time:</label>
                     <div class="col-md-5">
                        <div class="input-group bootstrap-timepicker">
                           <input type="text" class=" form-control timepicker24"/ name="time" id="time">
                           <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                        </div>
                        <span class="help-block"> Required </span> 
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label">Participation:</label>
                     <div class="col-md-2">
                        <input type="number" min=1 max=10 class="validate[required] form-control" id="participant" name="participant" placeholder="Participant #"/><br>
                        <span class="help-block"> Required </span> 
                     </div>
                     <span class="help-block"> (age above 14 years) </span> 
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label">Meal Plan:</label>
                     <div class="col-md-3">
                        <select id="meal" name="meal" class="validate[required]  form-control">
                           <option value="">Select Meal Plan</option>
                           <option value="yes">With Meal Plan</option>
                           <option value="no">Without Meal Plan</option>
                        </select>
                        <span class="help-block"> Required </span>                                                   
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label">Special Requirment:</label>
                     <div class="col-md-5">
                        <textarea class="form-control" rows="5" name="requirment" id="requirment"></textarea>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-3 control-label"></label>
                     <div class="col-md-5">
                          <button class="btn btn-primary ">Save <span onClick="formValidate();" id="btnNext"></span></button>
                     </div>
                  </div>




                  
               </div>
                <br><br>
         </div>

      </div>

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
                        <p style="font-size:15px"> Banquet Reservation data has been UNSUCCESSFUL. </p?
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

