<?php $this-> load-> view('BackEnd/AdminViews/include/navigation');
   $this-> load-> view('BackEnd/AdminViews/include/header');?>

<ul class="breadcrumb">
  <li><a href="<?php echo base_url();?>index.php/backend_controller"><i class="fa fa-file"></i> Home</a></li>
  <li class="active">Reservation Report</li>
</ul>
<div class="page-title">
  <h2> Reservation Report</h2>
</div>
<div class="page-content-wrap">
<div class="row">
  <div class="col-md-12">
  <form id="form1" name="form1" method="post" action="<?php echo base_url(); ?>index.php/report/reservation_payment_report">
    <table  class="table">
      <tr>
        <td width="87" height="45">Status:</td>
        <td width="210">
        <select id="status" name="status" >
        	<option value="">- select -</option>
            <option <?php if($_POST['status'] == 'pending'){echo 'selected';} ?>>pending</option>
            <option <?php if($_POST['status'] == 'confirmed'){echo 'selected';} ?>>confirmed</option>
            <option <?php if($_POST['status'] == 'check-in'){echo 'selected';} ?>>check-in </option>
            <option <?php if($_POST['status'] == 'check-out'){echo 'selected';} ?>>check-out </option>
          </select>
        </td>
        <td width="111">&nbsp;</td>
        <td width="83">&nbsp;</td>
      </tr>
      <tr>
        <td height="45">Country:</td>
        <td>
          <select id="counrty" name="country" >
            <option value="">--select a country--</option>
            <?php foreach ($countries as $list){    ?>                                                
                 <option value="<?php echo $list['country_id']; ?>" <?php if($_POST['country'] == $list['country_id']){echo 'selected';} ?>><?php echo $list['short_name']; ?></option>                                                  
            <?php } ?>
          </select>
        </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="41">Check In</td>
        <td>
          <input id="arrival_date" name="arrival_date" type="text" onMouseOver="date_calander()" value="<?php echo $_POST['arrival_date']; ?>">
        </td>
        <td>Check Out</td>
        <td>
          <input id="depature_date" name="depature_date" type="text" onMouseOver="date_calander()" value="<?php echo $_POST['depature_date']; ?>">
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="Search" id="Search" value="Search" class="btn btn-primary"></td>
        <td><input type="reset" name="Reset" id="Reset" value="Reset" class="btn btn-default"></td>
      </tr>
    </table>
    </form>
    
    <?php if(isset($_POST['Search'])){ ?>
    	<table class="table table-striped">
          <tr>
            <th>#</th>
            <th>Res No</th>
            <th>Customer Name</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>NOD</th>
            <th>Room Type</th>
            <th>Basis</th>
            <th>Country</th>
            <th><div align="right">Total Charges</div></th>
          </tr>
          <?php 
		  $c=1;
		  foreach($rpr as $res){ ?>
          <tr>
            <td><?php echo $c; ?></td>
            <td><?php echo $res->reservation_no; ?></td>
            <td><?php echo $res->f_name.' '.$res->l_name; ?></td>
            <td><?php echo $res->arrival_date; ?></td>
            <td><?php echo $res->depature_date; ?></td>
            <td><?php echo $res->no_of_days; ?></td>
            <td><?php echo $res->type; ?></td>
            <td><?php echo $res->basis; ?></td>
            <td><?php echo $res->short_name; ?></td>
            <td><div align="right"><?php echo number_format($res->grand_total, 2); ?></div></td>
          </tr>
          <?php $c++;} ?>
        </table>

    <?php } ?>
  </div>
</div>
<script>
	function date_calander(){ 
		var start= $("#arrival_date").datepicker({ dateFormat: "yy-mm-dd" }).val();
    	var end= $("#depature_date").datepicker({ dateFormat: "yy-mm-dd" }).val();
	}
</script>
