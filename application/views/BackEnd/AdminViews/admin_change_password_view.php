

<?php $this->load->view('BackEnd/AdminViews/include/navigation');
$this->load->view('BackEnd/AdminViews/include/header');
?>




  <ul class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/backend_controller"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="<?php echo base_url();?>index.php/backend_controller/user_management"> User List</a></li>

   
    
   </ul>
            
   <div class="page-title">
         <h2> Password Change</h2>
   </div>
            <div class="page-content-wrap">
               <div class="row">
                  <div class="col-md-12">
                     <div class="panel panel-default">
                        <div class="panel-body">

                                         <div class="box-body">


         

            <label for="exampleInputPassword1">  </label>
                      <div class="row">   
                   <div class="col-md-4">

                  <div class="form-group">
                      <label for="exampleInputPassword1">New Password</label>
                      <input type="password" class="form-control" id="newpw" name="newpw" placeholder="New Password">
                    </div>


                     <button id="change" name ="change" class="btn  btn-success" onclick="changePassword()"> Change Password</button> 
                     <button class="btn margin btn-warning" onclick="reset()"> Clear </button>
                     <button class="btn  btn-danger" onclick="cancel()">Cancel  </button>
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
          var  base_url = '<?=base_url()?>';
          var newpw = $('#newpw').val(); 
          var id = '<?php echo $admin_id ?>';
          $.ajax({              
              url:  base_url+'index.php/backend_controller/update_password_change',
              type: 'POST',
              data:{newpw:newpw, id:id},              
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









