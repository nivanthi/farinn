<?php
$this->load->view( 'BackEnd/AdminViews/include/navigation' );
$this->load->view( 'BackEnd/AdminViews/include/header' );
?>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>
<ul class="breadcrumb">
	<li><a href="<?php echo base_url(); ?>/index.php/backend_controller">Home</a>
	</li>
	<li class="active">Tour Reservations</li>
</ul>
<div class="page-title">
	<h2> Tour Reservations</h2>
</div>
<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<div class="panel-body">
				<div class="panel panel-default" id="add">
					<div class="panel-heading" style="background-color:#33414E;">
						<h4 class="panel-title" style="color:white"><span class="fa fa-car"></span><strong> &#160; List </strong> of Tour Reservation </h4>
					</div>
					<br><br>
					<div class="form-group">
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>Room Name</th>
											<th>Package Type</th>
											<th>Travel Date</th>
											<th>Travel Time</th>
											<th>Participants</th>
											<th>Tour Cost</th>
											<th>Meal Cost</th>
											<th>Remarks</th>
										</tr>
									</thead>


									<tbody>
										<?php                                            
                                		foreach ($reslist as $list){
                                   		$id = $list['tour_reservation_id'];
										?>
										<tr>
											<td>
												<?php echo $list['reservation_no']; ?>
											</td>
											<td>
												<?php echo $list['package_id']; ?>
											</td>
											<td>
												<?php echo $list['date']; ?> </td>
											<td>
												<?php echo $list['time']; ?>
											</td>
											<td>
												<?php echo $list['participant']; ?>
											</td>
											<td>
												<?php echo $list['tour_cost']; ?> </td>
											<td>
												<?php echo $list['meal_cost']; ?>
											</td>
											<td>
												<?php echo $list['description']; ?>
											</td>
											<td>
												<a class='btn btn-default btn-rounded btn-condensed btn-sm' href="<?php echo base_url(); ?>/index.php/backend_controller/admin_edit_tour_details/<?php echo $id; ?>"><i class="fas fa-pencil-alt"></i></a>

												<button class='btn btn-default btn-rounded btn-condensed btn-sm' onClick='javascript:delete_row("<?php echo $id; ?>");'><i class="fas fa-trash"></i></button>
											</td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
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
				<div class="mb-title"><i class="fas fa-trash"></i> DELETE</div>
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
		.btn-lg {
			margin-left: 10px;
		}
	</style>
	<!-- individual js -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/bootstrap/bootstrap-file-input.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
	<!-- individual js -->
	<script type="text/javascript">
		var id;


		function delete_row( tourId ) {

			//id = tourId.substring(9);
			// alert(tourId);
			id = tourId;
			$( "#message-box-danger" ).show();
		}


		$( document ).ready( function () {
			$( '#success_close' ).click( function () {
				$( "#message-box-success" ).hide();
			} );

			$( '#error_close' ).click( function () {
				$( "#message-box-danger" ).hide();
			} );
			
			$( '#error_ok' ).click( function () {
				$( "#message-box-error" ).hide();
			} );


			$( '#error_yes' ).click( function () {
				$( "#message-box-danger" ).hide();
				//alert(id);

				$.ajax( {
					type: "POST",
					url: "delete_tour_reservations",
					data: {
						id: id
					},
					success: function ( response ) {
						if ( response == 1 ) {
							$( "#message-box-success" ).show();
							location.reload();
						} else
							$( "#message-box-error" ).show();

					},
					error: function ( errorThrown ) {
						alert( "error" );
					}
				} );

			} );
		} );
	</script>