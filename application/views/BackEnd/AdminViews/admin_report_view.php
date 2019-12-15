

<?php $this-> load-> view('BackEnd/AdminViews/include/navigation');
   $this-> load-> view('BackEnd/AdminViews/include/header');?>
<ul class="breadcrumb">
   <li><a href="#">Link</a></li>
   <li class="active">Active</li>
</ul>
<div class="page-title">
   <h2> Report : Menu Informaion</h2>
</div>
<div class="page-content-wrap">
<div class="row">
   <div class="col-md-12">
      <form id="validate" role="form" class="form-horizontal" method="post" accept-charset="utf-8" action="<?php echo base_url();?>index.php/report/meal_report">
         <div class="panel panel-default">
            <div class="panel-body">
               <div class="panel panel-default" >
                  <div class="panel-body">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="col-md-2 control-label">Menu Type</label>
                              <div class="col-md-10">
                                 <select id="mealType" name="mealType" class="validate[required]  form-control">
                                    <option value=""> Choose Type  </option>
                                    <option value="food"> Food Menu</option>
                                    <option value="beverage">Beverage Menu</option>
                                 </select>
                                 <span class="help-block">  
                                 </span>                                                   
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-2 control-label">Search By</label>
                              <div class="col-md-10">
                                 <select id="opt" name="opt" class="validate[required]  form-control">
                                    <option value=""> Choose Search Option  </option>
                                    <option value="all">All</option>
                                    <option value="code">Code</option>
                                    <option value="name">Name</option>
                                    <option value="local"> Local Price</option>
                                    <option value="foreign">Foreign Price</option>
                                 </select>
                                 <span class="help-block">  
                                 <br>
                                 </span>                                                   
                              </div>
                           </div>
                        </div>




                        <div class="col-md-6">
                           <div class="form-group showHide foodC" id="showHide">
                              <label class="control-label col-md-4">Food Code:</label>
                              <div class="col-md-8">
                                 <input id="foodcode" name ="foodcode" class="form-control validate[required] "/>
                                 <div class="help-block">Try typing "a", "c", "p" etc.</div>
                              </div>
                              <div class="col-md-4"></div>
                           </div>
                           <div class="form-group showHide beverageC"  id="showHide">
                              <label class="control-label col-md-4">Beverage Code:</label>
                              <div class="col-md-8">
                                 <input id="bevcode" name ="bevcode" class="form-control validate[required] "/>
                                 <div class="help-block">Try typing "a", "c", "p" etc.</div>
                              </div>
                              <div class="col-md-4"></div>
                           </div>


             
                            <div class="form-group showHide foodName"  id="showHide">
                              <label class="col-md-4 control-label">Food Name:</label>
                              <div class="col-md-8">
                                 <select id="foodname" name="foodname" class="validate[required]  form-control">
                                     <?php 
                                                                               
                                       if (count($foodInfo)) 
                                       {
                                          echo "<option  value=''> -- Select Food Name -- </option>";
                                          foreach ($foodInfo as $list) 
                                          {                                                    
                                          echo "<option    value=" . $list['food_name']." >" . $list['food_name']." </option>";                                                   
                                          }
                                       }                                                
                                    ?>
                                 </select>
                                 <span class="help-block">  
                                 <br>
                                 </span>                                                   
                              </div>
                           </div>


                            <div class="form-group showHide beverageName"  id="showHide">
                              <label class="col-md-4 control-label">Beverage Name:</label>
                              <div class="col-md-8">
                                 <select id="beveragename" name="beveragename" class="validate[required]  form-control">
                                     <?php 
                                                                               
                                       if (count($beverageInfo)) 
                                       {
                                          echo "<option  value=''> -- Select Beverage Name -- </option>";
                                          foreach ($beverageInfo as $list) 
                                          {                                                    
                                          echo "<option    value=" . $list['beverage_name']." >" . $list['beverage_name']." </option>";                                                   
                                          }
                                       }                                                
                                    ?>
                                 </select>
                                 <span class="help-block">  
                                 <br>
                                 </span>                                                   
                              </div>
                           </div>


                           <div class="form-group showHide amountfilter"  id="showHide">
                              <label class="col-md-2 control-label">Amount</label>
                              <div class="col-md-5">

                                 <select id="filter" name="filter" class="validate[required]  form-control">
                                    <option value=""> Choose Filter Option  </option>
                                    <option value="e">Equal To</option>
                                    <option value="gt">Greater Than To</option>
                                    <option value="lt">Less Than To</option>                                   
                                 </select>                                 
                                 <span class="help-block">  
                                 <br>
                                 </span>                                                   
                              </div>

                               <div class="col-md-5">
                                    <input type="text" class="validate[required, custom[number]]  form-control" id="amount" name="amount">
                               </div>
                           </div>

                        </div>
                        <div class="panel-footer" >            
                           <button style="margin-left:9%" class="btn btn-primary " type="button" onClick="$('#validate').validationEngine('hide');">Hide prompts</button> 
                           <input type="reset" class="btn  btn-default" value="Clear All"  id="reset" name="reset"> 
                           <input style="margin-left:11%" type="submit" class="btn  btn-primary " value=" View Report">                          
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>

<script type="text/javascript">
   jQuery(document).ready( function() {
      jQuery("#validate").validationEngine();
   });
</script>


<script type="text/javascript">// food and beverage code auto complete
   $(function() {
   
      var foodcode = [
      <?php
      $query = mysql_query("SELECT food_code FROM food");
      while ($food = mysql_fetch_assoc($query)) {
          $food_code = $food["food_code"];
          echo "'$food_code',";
      }
      ?>
       ];
     
       $("#foodcode").autocomplete({
           source: foodcode,
           open: function(event, ui) {
               
               var autocomplete = $(".ui-autocomplete:visible");
               var oldTop = autocomplete.offset().top;
               var newTop = oldTop - $("#foodcode").height() + 25;
               autocomplete.css("top", newTop);
               
           }
       });

   
   
        var beveragecode = [
           <?php
      $query = mysql_query("SELECT beverage_code FROM beverage");
      while ($meal = mysql_fetch_assoc($query)) {
          $meal_code = $meal["beverage_code"];
          echo "'$meal_code',";
      }
      ?>
       ];
    
          $("#bevcode").autocomplete({
           source: beveragecode,
           open: function(event, ui) {
               
               var autocomplete = $(".ui-autocomplete:visible");
               var oldTop = autocomplete.offset().top;
               var newTop = oldTop - $("#bevcode").height() + 25;
               autocomplete.css("top", newTop);
               
           }
       });
       
   });            
</script>





<script type="text/javascript"> //div show and hide
   $(document).ready(function(){
       
        $("#mealType").change(function()
        {
   
           $(this).find("option:selected").each(function()
           {
   
               if($(this).attr("value")=="food" )
               {                   
                 $("#opt").change(function()
                 {   
                     $(this).find("option:selected").each(function()
                     {   
                            if($(this).attr("value")=="code" )
                            {
                               $(".showHide").not(".foodC").hide();   
                               $(".foodC").show();   
                            } 

                            else if($(this).attr("value")=="name" )
                            {
                               $(".showHide").not(".foodName").hide();   
                               $(".foodName").show();   
                            }

                            else if($(this).attr("value")=="local" )
                            {
                               $(".showHide").not(".amountfilter").hide();   
                               $(".amountfilter").show();   
                            }

                             else if($(this).attr("value")=="foreign" )
                            {
                               $(".showHide").not(".amountfilter").hide();   
                               $(".amountfilter").show();   
                            }

                            
                            else
                            {   
                                $(".showHide").hide();               
                            } 

                      });
     
                  }).change();
               }



             else if($(this).attr("value")=="beverage" )
               {                   
                 $("#opt").change(function()
                 {   
                     $(this).find("option:selected").each(function()
                     {   
                            if($(this).attr("value")=="code" )
                            {
                               $(".showHide").not(".beverageC").hide();   
                               $(".beverageC").show();   
                            } 

                            else if($(this).attr("value")=="name" )
                            {
                               $(".showHide").not(".beverageName").hide();   
                               $(".beverageName").show();   
                            }
                            else if($(this).attr("value")=="local" )
                            {
                               $(".showHide").not(".amountfilter").hide();   
                               $(".amountfilter").show();   
                            }

                            else if($(this).attr("value")=="foreign" )
                            {
                               $(".showHide").not(".amountfilter").hide();   
                               $(".amountfilter").show();   
                            }


                            else
                            {   
                                $(".showHide").hide();               
                            } 

                      });
     
                  }).change();
               }

               else if($(this).attr("value")=="" )
               {
                   $(".showHide").hide(); 
               }

   
   
    
       });
   
       }).change();

  
   
   });
   
</script>



<script type="text/javascript">

$("#reset").click(function(){
  var res = document.getElementById("showHide");    
  res.style.display = "none";

    
});

</script>