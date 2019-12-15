<?php $this-> load-> view('BackEnd/AdminViews/include/navigation');
   $this-> load-> view('BackEnd/AdminViews/include/header');?>

<ul class="breadcrumb">
  <li><a href="<?php echo base_url();?>index.php/backend_controller"><i class="fa fa-file"></i> Home</a></li>
  <li class="active">Reservation Graph Report</li>
</ul>
<div class="page-title">
  <h2> Reservation Graph Report</h2>
</div>
<div class="page-content-wrap">
<div class="row">
  <div class="col-md-12">
  <form id="form1" name="form1" method="post" action="<?php echo base_url(); ?>index.php/report/reservation_revenue_report">
    <table  class="table">
      <tr>
        <td height="41"><strong>Check In</strong></td>
        <td>
          <input id="arrival_date" name="arrival_date" type="text" onMouseOver="date_calander()" value="<?php echo $_POST['arrival_date']; ?>" class="form-control" required>
        </td>
        <td><strong>Check Out</strong></td>
        <td>
          <input id="depature_date" name="depature_date" type="text" onMouseOver="date_calander()" value="<?php echo $_POST['depature_date']; ?>" class="form-control" required>
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
    
		<div class="col-md-6">
        <h2>Country Wise Reservations</h2>
        	<div id="canvas-holder" align="center" style="width:50%;">
				<canvas id="chart-area" width="200" height="200"/>
			</div>
            
            
        </div>
        
        <div class="col-md-6">
        <h2>Monthly Sales</h2>
        	<div style="width: 100%">
	            <canvas id="canvas"></canvas>
            </div>
        </div>
        
    <?php } ?>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/Chart.js"></script>
<script>
	//PIE CHART
			var doughnutData = [
				{
					value: 77,
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Sri Lanka"
				},
				{
					value: 25,
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "England"
				},
				{
					value: 60,
					color: "#FDB45C",
					highlight: "#FFC870",
					label: "Australia"
				},
				{
					value: 33,
					color: "#949FB1",
					highlight: "#A8B3C5",
					label: "US"
				},
				{
					value: 12,
					color: "#999966",
					highlight: "#999900",
					label: "Germany"
				},
				{
					value: 12,
					color: "#DEF1B6",
					highlight: "#DEF4D7",
					label: "Cambodia"
				}

			];
	//END PIE CHART.
	
	//Start Bar Chart
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : [<?php for($m=1; $m<=12; ++$m){ echo '"'.date('F', mktime(0, 0, 0, $m, 1)).'",'; } ?>],
		datasets : [
			{
				fillColor : "rgba(44, 130, 201, 0.6)",//220,220,220,0.5
				strokeColor : "rgba(0, 181, 204, 1)",
				highlightFill: "rgba(44, 130, 201, 0.3)",
				highlightStroke: "rgba(44, 130, 201, 0.8)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			}
		]

	}
	
			window.onload = function(){
				var ctx = document.getElementById("chart-area").getContext("2d");
				window.myPie = new Chart(ctx).Pie(doughnutData, {responsive : true});
				
				var ctx2 = document.getElementById("canvas").getContext("2d");
				window.myBar = new Chart(ctx2).Bar(barChartData, {
					responsive : true
				});
			};

</script>
<script>
	function date_calander(){ 
		var start= $("#arrival_date").datepicker({ dateFormat: "yy-mm-dd" }).val();
    	var end= $("#depature_date").datepicker({ dateFormat: "yy-mm-dd" }).val();
	}
</script>
