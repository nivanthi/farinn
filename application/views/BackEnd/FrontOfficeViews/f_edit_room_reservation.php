<?php
$this->load->view( 'BackEnd/FrontOfficeViews/include/navigation' );
$this->load->view( 'BackEnd/FrontOfficeViews/include/header' );
?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>

<ul class="breadcrumb">
  <li><a href="<?php echo base_url(); ?>/index.php/backend_controller">Home</a></li>
  <li class="active">Edit Room Reservation</li>
</ul>
<div class="page-title">
  <h2> Edit Room Reservation</h2>
</div>
<div class="alert alert-success" id="message-box-success"> <strong>Success!</strong> Room Reservation Updated. </div>
<div class="page-content-wrap">
  <div class="row">
    <div class="col-md-12">
      <div class="panel-body">
        <div class="panel panel-default tabs">
          <ul class="nav nav-tabs" role="tablist" style="" disabled>
            <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Select Dates</a> </li>
            <li><a href="#tab-second" role="tab" data-toggle="tab">Select Rooms</a> </li>
            <li><a href="#tab-third" role="tab" data-toggle="tab">Customer Details</a> </li>
            <li><a href="#tab-fourth" role="tab" data-toggle="tab">Payment</a> </li>
            <li><a href="#tab-fifth" role="tab" data-toggle="tab">Confirmation</a> </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-first">
              <form id="selectdatetTab1" name="selectdatetTab1" class="form-horizontal" onMouseMove="date_difference_()">
                <div class="panel-heading" style="background-color:#33414E;">
                  <h4 class="panel-title" style="color:white"><span class="fa fa-calendar"></span><strong> &#160; Select </strong>Dates</h4>
                </div>
                <div class="col-md-6"> <br/>
                  <br/>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Reservation Status</label>
                    <div class="col-md-8">
                      <select id="status" name="status" class="validate[required]  form-control">
                        <option <?php if($resv[0]->reservation_status == 'pending'){echo "selected";} ?>>pending</option>
                        <option <?php if($resv[0]->reservation_status == 'confirmed'){echo "selected";} ?>>confirmed</option>
                        <option <?php if($resv[0]->reservation_status == 'check-in'){echo "selected";} ?>>check-in </option>
                        <option <?php if($resv[0]->reservation_status == 'check-out'){echo "selected";} ?>>check-out </option>
                      </select>
                      <input name="ref_no" id="ref_no" type="hidden" value="<?php echo $resv[0]->reservation_no; ?>" />
                      <span class="help-block"> </span> </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Arrival Date </label>
                    <div class="col-md-8">
                      <input id="arrival_date" value="<?php echo date("m/d/Y", strtotime($resv[0]->arrival_date)); ?>" name="datepicker-example7-start" type="text" class=" validate[required]" 
                      onMouseOut="date_difference_()">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Depature Date </label>
                    <div class="col-md-8">
                      <input id="depature_date" name="datepicker-example7-end" type="text" class="validate[required]" value="<?php echo date("m/d/Y", strtotime($resv[0]->depature_date)); ?>" 
                      onMouseOut="date_difference_()">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Number of Days</label>
                    <div class="col-md-3">
                      <input type="text" name="date_diff" id="date_diff" class="form-control" value="<?php echo $resv[0]->no_of_days; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Room Type</label>
                    <div class="col-md-5">
                      <select id="room_type" name="room_type" class="validate[required]  form-control">
                        <?php 
							if (count($room_type)) {
								echo "<option  value=''> -- Select RoomType -- </option>";
								foreach ($room_type as $list) { ?>                                                   
								<option <?php if($resv[0]->type == $list['type']){echo 'selected';} ?>  value="<?php echo $list['type_id']; ?>" ><?php echo $list['type']; ?></option>                                                   
						<?php		}
							}                                                
						?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Currency</label>
                    <div class="col-md-5">
                     <?php if($resv[0]->currency == 'LKR'){ $currency = 'local';}else if($resv[0]->currency = 'USD'){$currency = 'foreign';} ?>
                      <select id="currency" name="currency" class="validate[required]  form-control">
                        <option>--select a currency--</option>
                        <option value="local" <?php if($currency == 'local'){echo 'selected';} ?>>Local(Rs.)</option>
                        <option value="foreign" <?php if($currency == 'foreign'){echo 'selected';} ?>>Forgien($)</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Basis</label>
                    <div class="col-md-5">
                      <select id="basis" name="basis" class="validate[required]  form-control">
                        <option>--select your basis type--</option>
                        <option <?php if($resv[0]->basis == 'RO'){echo 'selected';} ?>>RO</option>
                        <option <?php if($resv[0]->basis == 'BB'){echo 'selected';} ?>>BB</option>
                        <option <?php if($resv[0]->basis == 'HB'){echo 'selected';} ?>>HB</option>
                        <option <?php if($resv[0]->basis == 'FB'){echo 'selected';} ?>>FB</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 "> <br>
                  <hr>
                  <button type="button" class="btn btn-primary pull-right" onClick="return tabOneNext_(<?php echo $resv[0]->reservation_no; ?>);"> Next </button>
                  <hr>
                </div>
              </form>
            </div>
            
            <div class="tab-pane " id="tab-second">
              <form id="selectroomtTab2" name="selectroomtTab2" class="form-horizontal" action="javascript:tabTwoNext();">
                <div class="panel-heading" style="background-color:#33414E;">
                  <h4 class="panel-title" style="color:white"><span class="glyphicon glyphicon-cutlery"></span><strong> &#160; Extra </strong> Facilities & <strong> Menu Item </strong> Requests</h4>
                </div>
                <div class="col-md-12">
                  <div class="form-group"> <br>
                    <br>
                    <div class="table-responsive">
                      <div id="room_availability"></div>
                      <!--Ajax load Availabe Rooms--> 
                    </div>
                  </div>
                </div>
                <div class="col-md-12 "> <br>
                  <hr>
                  <input type="button" class="btn btn-primary " onClick="tabTwoPrev();" value=" Previous" id="btnPrevTab2">
                  <!--<button class="btn btn-default " type="button" onClick="$('#selectroomtTab2').validationEngine('hide');">Hide prompts</button>-->
                  <button class="btn btn-primary pull-right"> Next </button>
                  <hr>
                </div>
              </form>
            </div>
            <div class="tab-pane" id="tab-third">
              <form id="addguestdetailsTab3" name="addguestdetailsTab3" class="form-horizontal" action="javascript:tabThreeNext();">
                <div class="panel-heading" style="background-color:#33414E;">
                  <h4 class="panel-title" style="color:white"><span class="fa fa-user"></span><strong> &#160; Basic </strong>Information</h4>
                </div>
                <div class="col-md-6">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked/>
                      Person </label>
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"/>
                      Company </label>
                  </div>
                  <br/>
                  <br/>
                  <br/>
                  <br/>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Title</label>
                    <div class="col-md-3">
                      <select id="title" name="title" class="validate[required]  form-control">
                        <option <?php if($resv[0]->title == 'Mr.'){echo 'selected';} ?>>Mr.</option>
                        <option <?php if($resv[0]->title == 'Mrs.'){echo 'selected';} ?>>Mrs.</option>
                        <option <?php if($resv[0]->title == 'MIss.'){echo 'selected';} ?>>MIss.</option>
                        <option <?php if($resv[0]->title == 'Rev.'){echo 'selected';} ?>>Rev.</option>
                      </select>
                      <input name="person_id" id="person_id" type="hidden" value="<?php echo $resv[0]->person_id; ?>" />
                      <span class="help-block"> </span> </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">First Name</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control validate[required]" name="fname" id="fname" value="<?php echo $resv[0]->f_name; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Last Name</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control validate[required]" name="lname" id="lname" value="<?php echo $resv[0]->l_name; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Address1</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control validate[required]" name="add1" id="add1" value="<?php echo $resv[0]->address_1; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Address2</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control name="add2" id="add2" value="<?php echo $resv[0]->address_2; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">City</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control validate[required]" name="city" id="city" value="<?php echo $resv[0]->city; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Country</label>
                    <div class="col-md-5">
                      <select id="counrty" name="country" class="validate[required]  form-control">
                        <option>--select a country--</option>
                        <?php 
                            if (count($countries))  {
								 foreach ($countries as $list) {?>                                              
									<option value="<?php echo $list['country_id']; ?>" <?php if($resv[0]->country_id == $list['country_id']){echo "selected";} ?>><?php echo $list['short_name'];?></option>                                                   
						<?php 		 }
                            }
                        ?>
                      </select>
                      <span class="help-block"> </span> </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">NIC | Passport No</label>
                    <lable>
                      <button class='btn btn-default btn-rounded btn-condensed btn-sm'><span class='fa fa-search'></span></button>
                    </lable>
                    <div class="col-md-8">
                      <input type="text" class="form-control validate[required]" name="nic" id="nic" value="<?php echo $resv[0]->Nic-Passport; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Contact No</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control validate[required]" name="contact" id="contact" value="<?php echo $resv[0]->phone; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">E Mail Address</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control validate[required]" name="email" id="email" value="<?php echo $resv[0]->email; ?>"/>
                    </div>
                  </div>
                </div>
                <div class="form-group showHide company" id="showHide">
                  <div class="col-md-6"> <br>
                    <br>
                    <br/>
                    <br/>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Company Name</label>
                      <div class="col-md-8">
                        <input type="text" value="" id="company_name" name="company_name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Contact Person</label>
                      <div class="col-md-8">
                        <input type="text" value="" id="company_person" name="company_person">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Contact Number</label>
                      <div class="col-md-8">
                        <input type="text" value="" id="company_contact_no" name="company_contact_no">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 col-xs-12 control-label">Address</label>
                      <div class="col-md-6 col-xs-12">
                        <textarea text-input form-control" rows="5" name="company_address" id="company_address"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 "> <br>
                  <hr>
                  <button class="btn btn-default " type="button" onClick="$('#addguestdetailsTab3').validationEngine('hide');">Hide prompts</button>
                  <button class="btn btn-primary pull-right"> Next </button>
                  <hr>
                </div>
              </form>
            </div>
            <div class="tab-pane " id="tab-fourth">
              <form id="addpaymentdetailsTab4" name="addpaymentdetailsTab4" class="form-horizontal" action="javascript:tabFourNext();">
                <div class="panel-heading" style="background-color:#33414E;">
                  <h4 class="panel-title" style="color:white"><span class="fa fa-money"></span><strong> &#160; Payment </strong>Details</h4>
                </div>
                <div class="col-md-6"> <br/>
                  <br/>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Room Charges</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control validate[required]" name="roomcharge" id="roomcharge" value="<?php echo $resv[0]->room_charges; ?>"/>
                      <input name="payment_id" id="payment_id" type="hidden" value="<?php echo $resv[0]->payment_id; ?>" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Other Charges</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control validate[required]" name="othercharge" id="othercharge" value="<?php echo $resv[0]->meal_charges; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Total Charge</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control validate[required]" name="totalcharge" id="totalcharge" value="<?php echo $resv[0]->total_charges; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Discount</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control validate[required]" name="discount" id="discount" value="<?php echo $resv[0]->discount; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Discounted Amount</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control validate[required]" name="discountamount" id="discountamount" value="<?php echo $resv[0]->discount_amount; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">NBT</label>
                    <div class="col-md-5">
                      <input type="text" class="form-control validate[required]" name="nbt" id="nbt" value="<?php echo $resv[0]->nbt; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">VAT</label>
                    <div class="col-md-5">
                      <input type="text" class="form-control validate[required]" name="vat" id="vat" value="<?php echo $resv[0]->vat; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Grand Total</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control validate[required]" name="grandtotal" id="grandtotal" value="<?php echo $resv[0]->grand_total; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Advance Payment</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control validate[required]" name="advance" id="advance" value="<?php echo $resv[0]->advance; ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Balance Payment</label>
                    <div class="col-md-8">
                      <input type="text" class="form-control validate[required]" name="balance" id="balance" value="<?php echo $resv[0]->balance; ?>"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6"> <br>
                  <br>
                  <br/>
                  <br/>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Payment Date</label>
                    <div class="col-md-8">
                      <input type="text" class="validate[required,custom[date]] form-control datepicker" id="payment_date" name="payment_date" 
                      value="<?php echo $resv[0]->payement_date; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Payment Method</label>
                    <div class="col-md-6">
                      <select id="payment_method" name="payment_method" class="validate[required]  form-control" onChange="show_cheque_row(this.value)" 
                      value="<?php echo $resv[0]->payement_method; ?>">
                        <option>--select payment method--</option>
                        <option <?php if($resv[0]->payement_method  == 'Cash'){echo "selected";} ?>>Cash</option>
                        <option <?php if($resv[0]->payement_method  == 'Card'){echo "selected";} ?>>Card</option>
                        <option <?php if($resv[0]->payement_method  == 'Cheque'){echo "selected";} ?>>Cheque</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group" id="cheque_payment">
                    <label class="col-md-3 control-label">Cheque No</label>
                    <div class="col-md-6">
                      <input type="text" id="cheque_no" name="cheque_no" value="" class="form-control">
                    </div>
                  </div>
                  <div class="form-group"  id="cheque_payment1">
                    <label class="col-md-3 control-label">Cheque Date</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control datepicker" value="" id="cheque_date" name="cheque_date">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 "> <br>
                  <hr>
                  <button class="btn btn-default " type="button" onClick="$('#addpaymentdetailsTab4').validationEngine('hide');">Hide prompts</button>
                  <button class="btn btn-primary pull-right"> Next </button>
                  <hr>
                </div>
              </form>
            </div>
            <div class="tab-pane " id="tab-fifth">
              <form id="confirmationsTab5" name="confirmationsTab5" class="form-horizontal" action="javascript:tabFiveNext();">
                <div class="panel-heading" style="background-color:#33414E;">
                  <h4 class="panel-title" style="color:white"><span class="glyphicon glyphicon-list-alt"></span><strong> &#160; Reservation </strong>Summary</h4>
                </div>
                <div class="col-md-10"> <br/>
                  <br/>
                  <div class="invoice">
                    <div class="row"> </div>
                    <br>
                    <div class="col-md-12">
                      <table width="841" class="table table-bordered">
                        <tbody>
                          <tr>
                            <td width="16%"><strong>Name:</strong></td>
                            <td width="30%"><div id="dis_name"></div></td>
                            <td width="28%"><strong>Total Room Charges:</strong></td>
                            <td width="26%"><div id="dis_room_charges"></div></td>
                          </tr>
                          <tr>
                            <td><strong>Address:</strong></td>
                            <td><div id="dis_address"></div></td>
                            <td><strong>Other Charges:</strong></td>
                            <td><div id="dis_oc"></div></td>
                          </tr>
                          <tr>
                            <td><strong>Contact No:</strong></td>
                            <td><div id="dis_con"></div></td>
                            <td><strong>NBT:</strong></td>
                            <td><div id="dis_nbt"></div></td>
                          </tr>
                          <tr>
                            <td><strong>Email:</strong></td>
                            <td><div id="dis_email"></div></td>
                            <td><strong>VAT:</strong></td>
                            <td><div id="dis_vat"></div></td>
                          </tr>
                          <tr>
                            <td><strong>From - To:</strong></td>
                            <td><div id="dis_frm_to"></div></td>
                            <td><strong>Discount:</strong></td>
                            <td><div id="dis_discount"></div></td>
                          </tr>
                          <tr>
                            <td><strong>Room Type:</strong></td>
                            <td><div id="dis_rt"></div></td>
                            <td><strong>Discount Amount:</strong></td>
                            <td><div id="dis_ad"></div></td>
                          </tr>
                          <tr>
                            <td><strong>Basis:</strong></td>
                            <td><div id="dis_basic"></div></td>
                            <td><strong>Total Charges:</strong></td>
                            <td><div id="dis_total_charge"></div></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 "> <br>
                  <hr>
                  <input type="button" class="btn btn-primary " onclick="tabfivePrev()" value="Previous">
                  <button class="btn btn-default " type="button" onClick="$('#confirmationsTab5').validationEngine('hide');">Hide prompts</button>
                  <input type="button" class="btn btn-primary pull-right" onclick="updateRoomReservation(this.form)" value="Finish">
                  <hr>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/BackEnd/calendar/css/metallic.css">
<script>
	function date_difference_(){ 
		var start= $("#arrival_date").datepicker("getDate");
    	var end= $("#depature_date").datepicker("getDate");
		
		days = (end - start) / (1000 * 60 * 60 * 24);

		$('#date_diff').val(Math.round(days));
	}
</script> 

<!--<script type='text/javascript' src='<?php echo base_url(); ?>assets/BackEnd/calendar/js/zebra_datepicker.js'></script>
<script type='text/javascript' src='<?php echo base_url(); ?>assets/BackEnd/calendar/js/core.js'></script>--> 

<script type="text/javascript">
	SyntaxHighlighter.defaults[ 'toolbar' ] = false;
	SyntaxHighlighter.all();
</script> 
<script type="text/javascript">
	//Save Reservation Data
	function updateRoomReservation()
    {
        var tab1Data = $("form#selectdatetTab1").serialize();
        var tab2Data = $("form#selectroomtTab2").serialize();
        var tab3Data = $("form#addguestdetailsTab3").serialize();
		var tab4Data = $("form#addpaymentdetailsTab4").serialize();
        var menuRowCount = $('#tblMenuRequest tr').length;
		
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/backend_controller/update_room_reservation",
            data: {tab1Data: tab1Data, tab2Data: tab2Data, tab3Data: tab3Data, tab4Data: tab4Data},
            success: function (response) {
                //alert(response);           
                if (response == 1) {
                    $("#message-box-success").show();
					$("#message-box-success").slideUp( 800 ).fadeIn( 1000 );
                    location.reload();
                } else
                    $("#message-box-danger").show();
            },
           error: function (errorThrown) {
                alert("error");
            }
        });
        return false;
    }

	jQuery( document ).ready( function () {
		jQuery( "#selectdatetTab1" ).validationEngine();
		jQuery( "#selectroomtTab2" ).validationEngine();
		jQuery( "#addguestdetailsTab3" ).validationEngine();
		jQuery( "#addpaymentdetailsTab4" ).validationEngine();
		jQuery( "#confirmationsTab5" ).validationEngine();
		
		//Hide Row
		$('#cheque_payment').hide();
		$('#cheque_payment1').hide();
		$('#message-box-success').hide();
	} );


	function tabOneNext_(refno) {
		var tab1Data = $( "form#selectdatetTab1" ).serialize();
		
		$.ajax( {
			type: "POST",
			url: "<?php echo base_url(); ?>index.php/backend_controller/get_room_availability", //name of the controller method
			data: {
				tab1Data: tab1Data,
				refno: refno
			},
			success: function ( response ) {
				$('#room_availability').html(response);
				$('.nav-tabs a[href="#tab-second"]').tab('show');
			}
		} );
	}
	
	function tabTwoNext(){
		$('.nav-tabs a[href="#tab-third"]').tab('show');
	}
	
	function tabThreeNext(){
		$('.nav-tabs a[href="#tab-fourth"]').tab('show');
	}
	
	function tabFourNext(){
		//Load basic dispaly info
		var f_name = $('#fname').val();
	 	var l_name = $('#lname').val();
		var address = $('#add1').val();
		var contact = $('#contact').val();
		var email = $('#email').val();
		var arrival_date = $('#arrival_date').val();
		var depature_date = $('#depature_date').val();
		var room_type = $('#room_type').val();
		var basis = $('#basis').val();
		
		var roomcharge = $('#roomcharge').val();
		var othercharge = $('#othercharge').val();
		var nbt = $('#nbt').val();
		var vat = $('#vat').val();
		var discount = $('#discount').val();
		var discountamount = $('#discountamount').val();
		var grandtotal = $('#grandtotal').val();
		
			$('#dis_name').html(f_name+' '+l_name);
			$('#dis_address').html(address);
			$('#dis_con').html(contact);
			$('#dis_email').html(email);
			$('#arrival_date').html(arrival_date);
			$('#dis_frm_to').html(arrival_date+' '+depature_date);
			$('#dis_rt').html(room_type);
			$('#dis_basic').html(basis);
		
			$('#dis_room_charges').html(roomcharge);//Others
			$('#dis_oc').html(othercharge);
			$('#dis_nbt').html(nbt);
			$('#dis_vat').html(vat);
			$('#dis_discount').html(discount);
			$('#dis_ad').html(discountamount);
			$('#dis_total_charge').html(grandtotal);
		
		$('.nav-tabs a[href="#tab-fifth"]').tab('show');
	}
	
	function tabFiveNext(){
		$('.nav-tabs a[href="#tab-fifth"]').tab('show');
	}
	
	function show_cheque_row(type){
		if(type == 'Cheque'){
			$('#cheque_payment').show();
			$('#cheque_payment1').show();
		}else{
			$('#cheque_payment').hide();
			$('#cheque_payment1').hide();
		}
	}
</script>