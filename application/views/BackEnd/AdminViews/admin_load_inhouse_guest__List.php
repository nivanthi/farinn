<?php $this-> load-> view('BackEnd/AdminViews/include/navigation');
   $this-> load-> view('BackEnd/AdminViews/include/header');?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>        
<ul class="breadcrumb">
   <li><a href="#">Link</a></li>
   <li class="active">Active</li>
</ul>
<div class="page-title">
   <h2> Guest Management</h2>
</div>
<div class="page-content-wrap">
   <div class="row">
      <div class="col-md-12">
         <div class="panel panel-default" id="add">
            <div class="panel-heading" style="background-color:#33414E;">
               <h4 class="panel-title" style="color:white" ><span class="fa fa-car"></span><strong> &#160; In-House </strong> Guest List </h4>
            </div>
            <br><br>
            <div class="form-group">
            
            </div>
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
      jQuery("#TourReservation").validationEngine();
   });
   

   function edit(tourId)
   {
    //alert(tourId);

     $.ajax({              
              url: 'admin_edit_tour_details',

              type: 'POST',
              data:{tourId:tourId},
              async: false,
              dataType: "html",
              
              success: function (data) {
               alert(data);
                              
              },
              error: function () {
                    alert("error");
              }
            });
            return true;

   }
   
   function formValidate()
   {
    jQuery("#addBanquetRequest").validationEngine();
   }
   
   
</script>"<?php echo base_url(); ?>index.php/backend_controller/admin_edit_tour_view"