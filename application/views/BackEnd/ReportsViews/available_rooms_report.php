<?php $this-> load-> view('BackEnd/AdminViews/include/navigation');
   $this-> load-> view('BackEnd/AdminViews/include/header');?>

<ul class="breadcrumb">
  <li><a href="<?php echo base_url();?>index.php/backend_controller"><i class="fa fa-file"></i> Home</a></li>
  <li class="active">Available Rooms</li>
</ul>
<div class="page-title">
  <h2> Available Rooms</h2>
</div>
<div class="page-content-wrap">
<div class="row">
  <div class="col-md-12">
  <form id="form1" name="form1" method="post" action="<?php echo base_url(); ?>index.php/report/available_rooms_report">
    <table  class="table">
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
            <th>Room No</th>
            <th>Room Type</th>
            <th>Currency</th>
            <th>Room</th>
            <th>Breakfast</th>
            <th>Lunch</th>
            <th>Dinner</th>
          </tr>
          <?php 
		  $c=1;
		  foreach($rooms_ava as $room){ ?>
          <tr>
            <td><?php echo $c; ?></td>
            <td><?php echo $room->room_no; ?></td>
            <td><?php echo $room->type; ?></td>
            <td><?php echo $room->currency; ?></td>
            <td><?php echo $room->ro; ?></td>
            <td><?php echo $room->breakfast; ?></td>
            <td><?php echo $room->lunch; ?></td>
            <td><?php echo $room->dinner; ?></td>
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
