<?php $this-> load-> view('BackEnd/AdminViews/include/navigation');
   $this-> load-> view('BackEnd/AdminViews/include/header');?>
<ul class="breadcrumb">
   <li><a href="<?php echo base_url(); ?>/index.php/backend_controller">Home</a></li>
   <li class="active">Banquet Reservation List</li>
</ul>
<div class="page-title">
   <h2> Banquet Reservation List</h2>
</div>
<div class="page-content-wrap">
   <div class="panel-body">
      <div class="panel panel-default" id="list">
         <div class="panel-heading" style="background-color:#33414E;">
            <h4 class="panel-title" style="color:white" ><span class="glyphicon glyphicon-home"></span><strong> &#160; View </strong> Reservations </h4>
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
                                 <th>CUSTOMER</th>
                                 <th >CONTACT #</th>
                                 <th >EVENT</th>
                                 <th >DATE</th>
                                 <th >GRAND TOTAL</th>
                                 <th >BALANCE</th>
                                 <th >PAIDE</th>
                                 <th >OPERATIONS</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php                                            
                                 if (count($banquer_res_list)) 
                                 {                   
                                   foreach ($banquer_res_list as $list) 
                                   {
                                 
                                     if($list['pay_complete']==0)
                                       $paid="No";
                                     else
                                       $paid="yes";

                                        $id = $list['resNo'];


                                       echo "<tr>";
                                       echo "<td> <strong>". $id . "</strong></td>";
                                       echo "<td>". $list['customer'] . "</td>"; 
                                       echo "<td>". $list['contact'] . "</td>";
                                       echo "<td>". $list['type'] . "</td>"; 
                                       echo "<td>". $list['date'] . "</td>"; 
                                       echo "<td  class='text-right'>". $list['grand_total'] . " </td>";  
                                       echo "<td class='text-right'>". $list['balance_after_first_pay'] . "</td>"; 
                                       echo "<td class='text-center'>". $paid. "</td>";  
                                     
                                        echo " <td>"?>
                                          
                                          <button class='btn btn-default btn-rounded btn-condensed btn-sm' target="_blank" onClick='view_row("<?php echo $id; ?>");'><span class='fa fa-search'></span></button>
                                          <a class='btn btn-default btn-rounded btn-condensed btn-sm' href="<?php echo base_url(); ?>/index.php/backend_controller/edit_banquet_reservation/<?php echo preg_replace("/[^0-9,.]/", "", $id); ?>"><i class="fas fa-pencil-alt"></i></a>
                                          <button class='btn btn-default btn-rounded btn-condensed btn-sm' onClick='javascript:delete_row("<?php echo $id; ?>");'><span class='fa fa-trash'></span></button>
                                         <?php echo"     </td>"; 
                                 
                                       echo "</tr>";                                                                 
                                   }
                                 }                                            
                                 ?>
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

  id = resId.substring(9);

 $("#message-box-danger").show(); 
};


function view_row(resId) {

  var view_id = resId.substring(9);
  window.open("<?php echo base_url();?>index.php/report/load_banquet_reservation_invoice_report?id="+view_id+"");
};



/*function edit_row(resId) {

  var edit_id = resId.substring(9);


  window.open("<?php echo base_url();?>index.php/report/load_banquet_reservation_invoice_report?id="+edit_id+"");
};*/


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
          //alert(id);

           $.ajax({
           type: "POST",
           url: "delete_banquet_reservations",
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


</script>