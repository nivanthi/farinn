<?php $this->load->view('BackEnd/AdminViews/include/navigation');
$this->load->view('BackEnd/AdminViews/include/header');
?>




<script type="text/javascript">
//for idle
//setTimeout(onUserInactivity, 1000 * 1200)
//function onUserInactivity() {
 // window.location.href = "<?php echo base_url();?>index.php/login/idle" ;
}
</script>






<?php 
foreach($css_files as $file): ?>
<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>

<?php foreach($js_files as $file): ?>

<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>




   <ul class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/backend_controller"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url();?>index.php/backend_controller/<?php echo $data['path']; ?>"> <?php echo $data['path_name']; ?></a></li>

    
   </ul>
            
   <div class="page-title">
         <h2> <?php echo $data['title']; ?></h2>
   </div>
            <div class="page-content-wrap">
               <div class="row">
                  <div class="col-md-12">
                     <div class="panel panel-default">
                        <div class="panel-body">

                           <?php echo $output; ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>  