<?php $this->load->view('BackEnd/AdminViews/include/navigation');
   $this->load->view('BackEnd/AdminViews/include/header');
   ?>

<ul class="breadcrumb">
  <li><a href="<?php echo base_url();?>index.php/backend_controller"><i class="fa fa-dashboard"></i> Home</a></li>
</ul>
<div class="page-title">
  <h2> Room Management</h2>
</div>
<div class="page-content-wrap">
<div class="row">
<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="box-body">
        <div class="row">
          <div class="col-md-4">
            <div class="widget widget-success widget-item-icon">
              <div class="widget-int num-count">Room Type</div>
              <div class="widget-title">Variety of Rooms</div>
              <div class="widget-controls"> </div>
              <div class="widget-buttons widget-c2">
                <div class="col"> <a href="<?=base_url('index.php/backend_controller/room_type_management');?>"><span class="fa fa-list"> List</span></a> </div>
                <div class="col"> <a href="<?=base_url('index.php/backend_controller/room_type_management/add');?>"><span class="fa fa-plus"> Add</span></a> </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget widget-warning widget-item-icon">
              <div class="widget-int num-count">Room Basis</div>
              <div class="widget-title">Local & Foreign Prices</div>
              <div class="widget-controls"> </div>
              <div class="widget-buttons widget-c2">
                <div class="col"> <a href="<?=base_url('index.php/backend_controller/room_basis_management');?>"><span class="fa fa-list"> List</span></a> </div>
                <div class="col"> <a href="<?=base_url('index.php/backend_controller/room_basis_management/add');?>"><span class="fa fa-plus"> Add</span></a> </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget widget-info widget-item-icon">
              <div class="widget-int num-count">Room </div>
              <div class="widget-title">Information</div>
              <div class="widget-controls"> </div>
              <div class="widget-buttons widget-c2">
                <div class="col"> <a href="<?=base_url('index.php/backend_controller/room_management');?>"><span class="fa fa-list"> List</span></a> </div>
                <div class="col"> <a href="<?=base_url('index.php/backend_controller/room_management/add');?>"><span class="fa fa-plus"> Add</span></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
   function changePassword()
   {   
   
     // if (confirm("Do you want to change the password") == true) 
     // {
             var newpw = $('#newpw').val(); 
             $.ajax({              
                 url: 'update_password_change',
                 type: 'POST',
                 data:{newpw:newpw},              
                 async: false,
                 dataType: "html",
   
                 success: function (data) {
                       alert("Successfully updated");  
                 },
   
                 error: function () {
                      alert("No"); 
                 }
               });
               return true;
            //window.location.href = "<?php echo base_url();?>index.php/backend_controller/user_management";
      //} else 
     // {
          //  window.location.href = "<?php echo current_url();?>";
     // }
   
   
     
     }
   
   
   function reset()
   { 
        document.getElementById("newpw").value = '';
   }
   
   
   
   
   function cancel() {
   
       if (confirm("Do you want to cancel and go back to list!") == true) {
            window.location.href = "<?php echo base_url();?>index.php/backend_controller/user_management";
       } else {
            window.location.href = "<?php echo current_url();?>";
       }
   }
</script> 
