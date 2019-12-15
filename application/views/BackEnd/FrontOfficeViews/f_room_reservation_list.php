<?php $this-> load-> view('BackEnd/FrontOfficeViews/include/navigation');
   $this-> load-> view('BackEnd/FrontOfficeViews/include/header');?>

<ul class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>/index.php/backend_controller">Home</a></li>
  <li class="active">Room Reservation List</li>
</ul>
<div class="page-title">
  <h2> Room Reservation List</h2>
</div>
<div class="page-content-wrap">
  <div class="panel-body">
    <div class="panel panel-default" id="list">
      <div class="panel-heading" style="background-color:#33414E;">
        <h4 class="panel-title" style="color:white" ><span class="glyphicon glyphicon-home"></span><strong> &#160; View </strong> Room Reservations </h4>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th width="12%">RES #</th>
                      <th>Name</th>
                      <th >Check In</th>
                      <th >Check Out</th>
                      <th >NOD</th>
                      <th >Room No</th>
                      <th >Room Type</th>
                      <th >Status</th>
                      <td>-</td>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($rrs_data as $res){ 
				  	$id = $res->reservation_no;
				  ?>
                  <td><?php echo $res->reservation_no; ?></td>
                  <td><?php echo $res->f_name.' '.$res->l_name; ?></td>
                  <td><?php echo $res->arrival_date; ?></td>
                  <td><?php echo $res->depature_date; ?></td>
                  <td><?php echo $res->no_of_days; ?></td>
                  <td><?php echo $res->room_no; ?></td>
                  <td><?php echo $res->type; ?></td>
                  <td><?php echo $res->reservation_status; ?></td>
                  <td><button class='btn btn-default btn-rounded btn-condensed btn-sm' target="_blank" onClick='view_row("<?php echo $id; ?>");'>
                  <span class='fa fa-search'></span>
                  </button>
                  <a class='btn btn-default btn-rounded btn-condensed btn-sm' href="<?php echo base_url(); ?>/index.php/backend_controller/f_edit_room_reservation/<?php echo $id; ?>"><i class="fas fa-pencil-alt"></i></a>
                  <button class='btn btn-default btn-rounded btn-condensed btn-sm' onClick='javascript:delete_row("<?php echo $id; ?>");'><span class='fa fa-trash'></span></button>
                 </td> 
                </tr>                                                                 
                <?php  } ?>
               </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="message-box message-box-success animated fadeIn" id="message-box-success">
  <div class="mb-container">
    <div class="mb-middle">
      <div class="mb-title"><span class="fa fa-check"></span> SUCCESS</div>
      <div class="mb-content">
        <p style="font-size:15px">Record has been SUCCESSFULLY deleted. </p>
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
      <div class="mb-title"><span class="fa fa-trash"></span> DELETE</div>
      <div class="mb-content">
        <p style="font-size:15px"> Do you want to delete this record. </p>
      </div>
      <div class="mb-footer">
        <button class="btn btn-default btn-lg pull-right mb-control-close" id="error_close">NO</button>
        <button class="btn btn-default btn-lg pull-right " id="error_yes">YES</button>
      </div>
    </div>
  </div>
</div>
<div class="message-box message-box-danger animated fadeIn" id="message-box-error">
  <div class="mb-container">
    <div class="mb-middle">
      <div class="mb-title"><span class="fa fa-times"></span> ERROR</div>
      <div class="mb-content">
        <p style="font-size:15px">You cannot delete payment completed reservation records. </p>
      </div>
      <div class="mb-footer">
        <button class="btn btn-default btn-lg pull-right mb-control-close" id="error_ok">OK</button>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
.btn-lg{
  margin-left: 10px;
}
</style>
<script type="text/javascript">

var id ;
function delete_row(resId) {
  id = resId;
  $("#message-box-danger").show(); 
};


function view_row(resId) {
  window.open("<?php echo base_url();?>index.php/report/reserved_room_form?id="+resId+"");
};


   $(document).ready(function() {
   
        
   
   		$('#success_close').click(function() {
              $("#message-box-success").hide(); 


       });

   	   $('#error_close').click(function() {
              $("#message-box-danger").hide(); 
       });

       $('#error_ok').click(function() {
              $("#message-box-error").hide(); 
       });


    $('#error_yes').click(function() {
       $("#message-box-danger").hide(); 

           $.ajax({
           type: "POST",
           url: "delete_room_reservations",
           data: {resId:id },
           success: function(response) {            
             if(response == 1){
               $("#message-box-success").show(); 
                location.reload();
             }
                  
             else
                  $("#message-box-error").show(); 

           },
           error: function(errorThrown) {
               alert("error");
           }
       });

       });
   });


/*function edit_row(resId) {

  var edit_id = resId.substring(9);


  window.open("<?php echo base_url();?>index.php/report/load_banquet_reservation_invoice_report?id="+edit_id+"");
};*/


</script>