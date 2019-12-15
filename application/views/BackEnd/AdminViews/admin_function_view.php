<?php $this-> load-> view('BackEnd/AdminViews/include/navigation');
   $this-> load-> view('BackEnd/AdminViews/include/header');?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/BackEnd/js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>        
<ul class="breadcrumb">
   <li><a href="#">Link</a></li>
   <li class="active">Active</li>
</ul>
<div class="page-title">
   <h2> Add Banquet Reservation</h2>
</div>
<div class="page-content-wrap">
   <div class="row">
      <div class="col-md-12">
         <!--div class="panel panel-default"-->
         <div class="panel-body">
            <div class="panel panel-default tabs">
               <ul class="nav nav-tabs" role="tablist" style="" disabled>
                  <li class="active"><a href="#tab-first" role="tab" data-toggle="tab"  >Basic Details</a></li>
                  <li><a href="#tab-second" role="tab" data-toggle="tab">Extra Facilities & Menu Requests</a></li>
                  <li><a href="#tab-third" role="tab" data-toggle="tab">Other Charges & Payments</a></li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane active" id="tab-first">
                     <form id="addBanquetRequestTab1" name="addBanquetRequestTab1" class="form-horizontal"  action="javascript:tabOneNext();">
                        <div class="panel-heading" style="background-color:#33414E;">
                           <h4 class="panel-title" style="color:white" ><span class="fa fa-user"></span><strong> &#160; Basic </strong>Information</h4>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <br/> <br/>
                              <label class="col-md-3 control-label" >Event</label>
                              <div class="col-md-8">
                                 <select id="functions" name="functions" class="validate[required]  form-control">
                                 <?php 
                                    if (count($event)) 
                                    {
                                       echo "<option  value=''> -- Select Event -- </option>";
                                       foreach ($event as $list) 
                                       {                                                    
                                       echo "<option    value=" . $list['function_type_id']." >" . $list['type']." </option>";                                                   
                                       }
                                    }                                                
                                    ?>
                                 </select>
                                 <span class="help-block">  </span>                                                   
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label">Date </label>
                              <div class="col-md-8">
                                 <input type="text" class="form-control datepicker validate[required] " name="date" placeholder="Function Date">
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label">Time & Hours</label>
                              <div class="col-md-4">
                                 <div class="input-group ">
                                    <input type="number" min="1"  max="24" class="form-control  validate[required]" id="funcTime" name="funcTime" placeholder="Start Time (24 hrs)"/>                                          
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <input type="text" class="form-control " name="hour" id="hour" placeholder="No of Hours"/>   
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label">Banquet</label>
                              <div class="col-md-8">
                                 <select id="hall" name="hall" class="validate[required]  form-control">
                                 <?php 
                                    if (count($banquet)) 
                                    {
                                       echo "<option  value=''> -- Select Banquet -- </option>";
                                       foreach ($banquet as $list) 
                                       {                                                    
                                       echo "<option    value=" . $list['hall_id']." >" . $list['hall_name']." </option>";                                                   
                                       }
                                    }                                                
                                    ?>
                                 </select>
                                 <span class="help-block">  </span>                                                   
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label">Menu</label>
                              <div class="col-md-8">
                                 <select class="form-control validate[required]"  name="menu" id="menu" >
                                 <?php 
                                    if (count($menu)) 
                                    {
                                       echo "<option  value=''> -- Select Banquet Menu -- </option>";
                                       foreach ($menu as $list) 
                                       {                                                    
                                       echo "<option    value=" . $list['menu_id']. "-". $list['local_price'] . ">" .$list['menu_no']."  </option>";                                                   
                                       }
                                    }                                                
                                    ?>
                                 </select>
                                 <span class="help-block">  </span>                                                   
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label">Guests</label>
                              <div class="col-md-5">
                                 <input type="text" class="form-control validate[required, custom[integer],min[50],max[450]]  " name="count" id="count" placeholder="No of Guests"/>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <br><br>
                           <div class="form-group">
                              <label class="col-md-3 control-label">Customer</label>
                              <div class="col-md-8">
                                 <input type="text" class="form-control validate[required]" name="name" />
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label">E-mail</label>
                              <div class="col-md-8">
                                 <input type="text" class="form-control validate[custom[email]] " name="email" />
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-md-3 control-label">Contact #</label>
                              <div class="col-md-8">
                                 <input type="text" class=" form-control validate[required] phone" name="contact" id="contact"/>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 ">
                           <br>
                           <hr>
                           <button class="btn btn-default " type="button" onClick="$('#addBanquetRequestTab1').validationEngine('hide');">Hide prompts</button>                                                                                                        
                           <button class="btn btn-primary pull-right" > Next </button> 
                           <hr>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane " id="tab-second">
                     <form id="addBanquetRequestTab2"  class="form-horizontal"  action="javascript:tabTwoNext();">
                        <div class="panel-heading" style="background-color:#33414E;">
                           <h4 class="panel-title" style="color:white" ><span class="fa fa-cutlery"></span><strong> &#160; Extra  </strong> Facilities & <strong> Menu Item  </strong> Requests</h4>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <br><br>
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th>FACILITY</th>
                                       <th width="150px">COST</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><input type="checkbox" class="" id="chkLiqueur"/> &#160; Liqueur</td>
                                       <td><input type="text" class="form-control text-right textboxes  validate[required]" disabled name="txtLiqueur" id="txtLiqueur" /></td>
                                    </tr>
                                    <tr>
                                       <td><input type="checkbox" class="" id="chkPoruwa"/>  &#160; Poruwa</td>
                                       <td><input type="text" class="form-control text-right textboxes validate[required]" disabled name="txtPoruwa" id="txtPoruwa" /></td>
                                    </tr>
                                    <tr>
                                       <td><input type="checkbox" class=""  id="chkMusicGroup"/> &#160; Music Group</td>
                                       <td><input type="text" class="form-control text-right textboxes validate[required]" disabled name="txtMusicGroup"  id="txtMusicGroup"/></td>
                                    </tr>
                                    <tr>
                                       <td><input type="checkbox" class=""  id="chkDancingGroup"/> &#160; Dancing Group</td>
                                       <td><input type="text" class="form-control text-right textboxes validate[required]" disabled name="txtDancingGroup" id="txtDancingGroup"/></td>
                                    </tr>
                                    <tr>
                                       <td><input type="checkbox" class=""  id="chkFlowerArrengement"/> &#160; Flower Arrengement</td>
                                       <td><input type="text" class="form-control text-right textboxes validate[required]" disabled name="txtFlowerArrengement"  id="txtFlowerArrengement"/></td>
                                    </tr>
                                    <tr>
                                       <td><input type="checkbox" class=""  id="chkCakeStructure"/> &#160; Cake Structure</td>
                                       <td><input type="text" class="form-control text-right textboxes validate[required]" disabled name="txtCakeStructure" id="txtCakeStructure"/></td>
                                    </tr>
                                    <tr  bgcolor="#33414E" style="color:'white'">
                                       <td  style="color:white;"><b> &#160; TOTAL AMOUNT (Rs.)</b></td>
                                       <td class="text-right" style="color:white;"><b>                                             
                                          <span id="sum">0.00</span> </b>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
                           <br><br>
                           <input type="button" class="btn btn-success btn-condensed" value="Add Row" onclick="addMenuField();">
                           <input type="button" class="btn btn-danger btn-condensed" value="Remove" onclick="removeMenuField();">
                           <table id="tblMenuRequest" class="table">
                              <thead>
                                 <tr>
                                    <th width="40%">MENU ITEM DESCRIPTION</th>
                                    <th width="5%">QUANTITY (Kg.)</th>
                                    <th>UNIT PRICE (Rs.)</th>
                                    <th >SUB TOTAL</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td> <input type="text"  class="form-control " name="txtMenuDiscrip" id="txtMenuDiscrip"/></td>
                                    <td><input type="text" class="form-control  validate[custom[number]]" name="txtMenuQty" id="txtMenuQty"></td>
                                    <td> <input type="text"  class="form-control text-right validate[custom[number]]" name="txtMenuUnitPrice" id="txtMenuUnitPrice"/></td>
                                    <td> <b><input type="text"  class="form-control text-right menuTextBoxes" disabled name="txtMenuSubTot" id="txtMenuSubTot"/></b></td>
                                 </tr>
                                 <tr  bgcolor="#33414E" style="color:'white'">
                                    <td colspan="3" style="color:white;"><b> &#160; TOTAL AMOUNT (Rs.)</b></td>
                                    <td class="text-right" style="color:white;"><b>
                                       <span id="menuSum" >0.00</span> </b> </b>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="col-md-12 ">
                           <br>
                           <hr>
                           <input type="button" class="btn btn-primary "  onClick="tabTwoPrev();" value=" Previous" id="btnPrevTab2">
                           <button class="btn btn-default " type="button" onClick="$('#addBanquetRequestTab2').validationEngine('hide');">Hide prompts</button>                                                                                                         
                           <button class="btn btn-primary pull-right" > Next </button> 
                           <hr>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane " id="tab-third">
                     <form id="addBanquetRequestTab3"  class="form-horizontal"  action="javascript:tabThreePrev();">
                        <div class="panel-heading" style="background-color:#33414E;">
                           <h4 class="panel-title" style="color:white" ><span class="fa fa-usd"></span> &#160; Other Charges & <strong>  Payments </strong></h4>
                        </div>
                        <div class="col-md-5">
                           <br><br>
                           <input type="button" class="btn btn-success btn-condensed" value="Add Row" onclick="addOtherChargeField();">
                           <input type="button" class="btn btn-danger btn-condensed" value="Remove" onclick="removeOtherChargeField();">
                           <table id="tblOtherCharge" class="table" >
                              <thead>
                                 <tr>
                                    <th>OTHER CHARGES (Description)</th>
                                    <th width="150px">AMOUNT</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td><input type="text" class="form-control " name="txtOtherChargeDescrip" id="txtOtherChargeDescrip" /></td>
                                    <td><input type="text" class="form-control text-right other validate[custom[number]]" name="txtOtherChargeAmount"  id="txtOtherChargeAmount" /></td>
                                 </tr>
                                 <tr  bgcolor="#33414E" style="color:'white'">
                                    <td style="color:white;"><b> &#160; TOTAL AMOUNT (Rs.)</b></td>
                                    <td class="text-right" style="color:white;"><b>
                                       <span id="txtOtherSum" >0.00</span>  </b>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-6">
                           <br><br>
                           <table class="table">
                              <tbody>
                                 <tr>
                                    <td>Banquet Charge</td>
                                    <td><input type="text" class="form-control text-right final" disabled name="txtFinalBanquetCharge" id="txtFinalBanquetCharge" /></td>
                                 </tr>
                                 <tr>
                                    <td> Extra Facility Charges </td>
                                    <td><input type="text" class="form-control text-right final" disabled name="txtFinalExtraCharge" id="txtFinalExtraCharge" /></td>
                                 </tr>
                                 <tr>
                                    <td> Menu Request Charge  </td>
                                    <td><input type="text" class="form-control text-right final" disabled name="txtFinalMenuCharge" id="txtFinalMenuCharge" /></td>
                                 </tr>
                                 <tr>
                                    <td>Other Charges </td>
                                    <td><input type="text" class="form-control text-right final" disabled name="txtFinalOtherCharge" id="txtFinalOtherCharge"  /></td>
                                 </tr>
                                 <tr  bgcolor="#495661" style="color:'white'">
                                    <td  style="color:white;">  <b>&#160; SUB TOTAL (Rs.) </b>  </td>
                                    <td class="text-right" style="color:white;"><b>
                                       <span id="txtFinalSubTotal" name="txtFinalSubTotal" >0.00</span>  </b>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <table class="table">
                              <tbody>
                                 <tr>
                                    <td>Discount</td>
                                    <td><input type="text" class="form-control text-right validate[custom[number]]" name="txtDiscount" id="txtDiscount" /></td>
                                    <td><input type="text" class="grand form-control text-right" name="txtDiscountedAmnt" id="txtDiscountedAmnt"  disabled placeholder="Discounted Amount"/></td>
                                 </tr>
                                 <tr>
                                    <td>NBT</td>
                                    <td><input type="text" class=" form-control text-right validate[custom[number]]" name="txtnbtRate" id="txtnbtRate" placeholder="Rate %"/></td>
                                    <td><input type="text" class="grand form-control text-right" name="txtnbtAmnt" id="txtnbtAmnt" disabled placeholder="NBT Amount"/></td>
                                 </tr>
                                 <tr>
                                    <td>VAT</td>
                                    <td><input type="text" class=" form-control text-right validate[custom[number]]" name="txtVatRate" id="txtVatRate"  placeholder="Rate %"/></td>
                                    <td><input type="text" class="grand form-control text-right" name="txtVatAmnt" id="txtVatAmnt" disabled placeholder="VAT Amount"/></td>
                                 </tr>
                                 <tr  bgcolor="#495661" style="color:'white'">
                                    <td  style="color:white;" colspan="2">  <b>&#160; GRAND TOTAL (Rs.) </b>  </td>
                                    <td class="text-right" style="color:white;"><b>
                                       <span id="txtFinalGrandTotal" name="txtFinalGrandTotal" >0.00</span>  </b>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <table class="table">
                              <tbody>
                                 <tr>
                                    <td>Advance</td>
                                    <td><input type="text" class="form-control text-right" name="txtAdvance" id="txtAdvance" /></td>
                                    <td>
                                       <div class="form-group">                                                
                                          <input type="text" class="mask_date form-control" name="advancePayDate" value="" placeholder="Date of 1st Payment "/>
                                          <span class="help-block">Example: 2012-12-21 </span>         
                                       </div>
                                    </td>
                                 </tr>
                                 <tr  bgcolor="#33414E" style="color:'white'">
                                    <td  style="color:white;" colspan="2">  <b>&#160; BALANCE (Rs.)</b>  </td>
                                    <td class="text-right" style="color:white;"><b>
                                       <span id="txtFinalBalance" name="txtFinalBalance" >0.00</span>  </b>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="col-md-12 ">
                           <br>
                           <hr>
                           <input type="button" class="btn btn-primary " onclick="tabThreePrev()" value="Previous">    
                           <button class="btn btn-default " type="button" onClick="$('#addBanquetRequestTab2').validationEngine('hide');">Hide prompts</button>                                                                                                         
                           <input type="button" class="btn btn-primary pull-right" onclick="saveBanquetRequest(this.form)" value="Finish">    
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

<script type="text/javascript">

 function saveBanquetRequest() 
 {
      //All control must have name property 
     var tab1Data = $("form#addBanquetRequestTab1").serialize();

     var tab2Data = $("form#addBanquetRequestTab2").serialize();

     var tab3Data = $("form#addBanquetRequestTab3").serialize();

  
    $.ajax({
        type: "POST",
        url: "save_banquet_reservations",
        data: {tab1Data:tab1Data, tab2Data:tab2Data, tab3Data:tab3Data},
        success: function(response) {
           alert(response);
        },
        error: function(errorThrown) {
            alert("error");
        }
    });
    return false;
     
 };

   function tabOneNext() {
   
     var menu =  $('#menu').val();
     var data = menu.split("-");
     var menuCost = data[1];
   
     var count =  $('#count').val();
   
     var banquetCost= parseFloat(menuCost) * parseFloat(count) ;
   
     $('#txtFinalBanquetCharge').val(banquetCost.toFixed(2));
     calculate_Final_SubTotal();
    
        $('.nav-tabs a[href="#tab-second"]').tab('show');      
   
   }
   
   function tabTwoNext() {
       $('.nav-tabs a[href="#tab-third"]').tab('show');
       jQuery("#addBanquetRequestTab2").validationEngine();
   }
   
   function tabTwoPrev() {
       $('.nav-tabs a[href="#tab-first"]').tab('show');
   }
   
   function tabThreePrev() {
       $('.nav-tabs a[href="#tab-second"]').tab('show');
   }
   
   
   
   
   function addOtherChargeField(argument) {
       var tblOtherCharge = document.getElementById("tblOtherCharge");
       var currentIndex = tblOtherCharge.rows.length;
       var currentRow = tblOtherCharge.insertRow(1);
   
       var descripBox = document.createElement("input");
       descripBox.setAttribute("name", "txtOtherChargeDescrip" + (currentIndex - 2));
       descripBox.setAttribute("class", "form-control");
   
       var amountBox = document.createElement("input");
       amountBox.setAttribute("name", "txtOtherChargeAmount" + (currentIndex - 2));
       amountBox.setAttribute("id", "txtOtherChargeAmount" + (currentIndex - 2));
       amountBox.setAttribute("class", "form-control text-right other validate[custom[number]] ");
   
       var currentCell = currentRow.insertCell();
       currentCell.appendChild(descripBox);
   
       currentCell = currentRow.insertCell();
       currentCell.appendChild(amountBox);
   
       amountBox.onkeyup = function() {
           calculatOtherTotal();
       };
   }
   
   
   
   function removeOtherChargeField() {
       if (tblOtherCharge.rows.length > 3) {
           var cnt = parseInt(tblOtherCharge.rows.length) - 2;
           tblOtherCharge.deleteRow(1);
           calculatOtherTotal();
       }
   }
   $("#txtOtherChargeAmount").keyup(function() {
       calculatOtherTotal();
   });
   
   
   
   function calculatOtherTotal() {
       var sum = 0;
       $(".other").each(function() {
           if (!isNaN(this.value) && this.value.length != 0) {
               sum += parseFloat(this.value);
           }
       });
       document.getElementById("txtOtherSum").innerHTML = sum.toFixed(2);
       $('#txtFinalOtherCharge').val(sum.toFixed(2));
       calculate_Final_SubTotal();        
   
   }
   
   
   
   
   
   
     function addMenuField(argument) {
       var tblMenuRequest = document.getElementById("tblMenuRequest");
       var currentIndex = tblMenuRequest.rows.length;
       var currentRow = tblMenuRequest.insertRow(1);
       var menuDiscripBox = document.createElement("input");
   
       menuDiscripBox.setAttribute("name", "txtMenuDiscrip" + (currentIndex - 2));
       menuDiscripBox.setAttribute("class", "form-control");
   
       var menuQtyBox = document.createElement("input");
       menuQtyBox.setAttribute("name", "txtMenuQty" + (currentIndex - 2));
       menuQtyBox.setAttribute("id", "txtMenuQty" + (currentIndex - 2));
       menuQtyBox.setAttribute("class", "form-control validate[custom[number]] ");
   
       var menuUnitPriceBox = document.createElement("input");
       menuUnitPriceBox.setAttribute("name", "txtMenuUnitPrice" + (currentIndex - 2));
       menuUnitPriceBox.setAttribute("id", "txtMenuUnitPrice" + (currentIndex - 2));
       menuUnitPriceBox.setAttribute("class", "form-control text-right validate[custom[number]] ");
   
       var menuSubTotBox = document.createElement("input");
       menuSubTotBox.setAttribute("name", "txtMenuSubTot" + (currentIndex - 2));
       menuSubTotBox.setAttribute("id", "txtMenuSubTot" + (currentIndex - 2));
       menuSubTotBox.setAttribute("class", "form-control text-right menuTextBoxes");
       menuSubTotBox.disabled = true;
   
       var currentCell = currentRow.insertCell(-1);
       currentCell.appendChild(menuDiscripBox);
   
       var currentCell = currentRow.insertCell(-1);
       currentCell.appendChild(menuQtyBox);
   
       currentCell = currentRow.insertCell(-1);
       currentCell.appendChild(menuUnitPriceBox);
       currentCell = currentRow.insertCell(-1);
       currentCell.appendChild(menuSubTotBox);
   
       menuQtyBox.onkeyup = function() {
           menuSubTotBox.value = (menuQtyBox.value * menuUnitPriceBox.value).toFixed(2);
           calculateMenuTotal();
       };
   
       menuUnitPriceBox.onkeyup = function() {
           menuSubTotBox.value = (menuQtyBox.value * menuUnitPriceBox.value).toFixed(2);
           calculateMenuTotal();
       };
   }
   
   
   
   $("#txtMenuQty,#txtMenuUnitPrice").keyup(function() {
          calculateMenuTotal();
      });
   
   
   
      function removeMenuField() {
          if (tblMenuRequest.rows.length > 3) {
              var cnt = parseInt(tblMenuRequest.rows.length) - 2;
              tblMenuRequest.deleteRow(1);
              calculateMenuTotal();
          }
      }
   
   
   
   
      function calculateMenuTotal() {
          var s = ($('#txtMenuQty').val() * $('#txtMenuUnitPrice').val()).toFixed(2);
          $('#txtMenuSubTot').val(s);
          var sum = 0;
          $(".menuTextBoxes").each(function() {
              if (!isNaN(this.value) && this.value.length != 0) {
                  sum += parseFloat(this.value);
              }
          });
          document.getElementById("menuSum").innerHTML = sum.toFixed(2);
           $('#txtFinalMenuCharge').val(sum.toFixed(2));
           calculate_Final_SubTotal();
      }
   
   
   
   
   
   
   $(function() {
       $('#chkLiqueur').click(function() {
           if (this.checked) {
               $('#txtLiqueur').val();
               updateTotal();
           } else {
               $('#txtLiqueur').val("");
               updateTotal();
           }
       });
       $('#chkPoruwa').click(function() {
           if (this.checked) {
               $('#txtPoruwa').val();
               updateTotal();
           } else {
               $('#txtPoruwa').val("");
               updateTotal();
           }
       });
   
       $('#chkMusicGroup').click(function() {
           if (this.checked) {
               $('#txtMusicGroup').val();
               updateTotal();
           } else {
               $('#txtMusicGroup').val("");
               updateTotal();
           }
       });
   
       $('#chkDancingGroup').click(function() {
           if (this.checked) {
               $('#txtDancingGroup').val();
               updateTotal();
           } else {
               $('#txtDancingGroup').val("");
               updateTotal();
           }
       });
   
       $('#chkFlowerArrengement').click(function() {
           if (this.checked) {
               $('#txtFlowerArrengement').val();
               updateTotal();
           } else {
               $('#txtFlowerArrengement').val("");
               updateTotal();
           }
       });
   
       $('#chkCakeStructure').click(function() {
           if (this.checked) {
               $('#txtCakeStructure').val();
               updateTotal();
           } else {
               $('#txtCakeStructure').val("");
               updateTotal();
           }
       });
   
       function updateTotal() {
           var total = 0;
           $('.textboxes').each(function() {
               total += Number($(this).val());
           });
   
           $("#sum").html(total.toFixed(2));          
           
       }
       updateTotal();
   });
   
   $('#chkLiqueur').change(function() {
       $("#txtLiqueur").prop("disabled", !$(this).is(':checked'));
   });
   
   $('#chkPoruwa').change(function() {
       $("#txtPoruwa").prop("disabled", !$(this).is(':checked'));
   });
   
   $('#chkMusicGroup').change(function() {
       $("#txtMusicGroup").prop("disabled", !$(this).is(':checked'));
   });
   
   $('#chkDancingGroup').change(function() {
       $("#txtDancingGroup").prop("disabled", !$(this).is(':checked'));
   });
   
   $('#chkLiqueur').change(function() {
       $("#txtLiqueur").prop("disabled", !$(this).is(':checked'));
   });
   
   $('#chkFlowerArrengement').change(function() {
       $("#txtFlowerArrengement").prop("disabled", !$(this).is(':checked'));
   });
   
   $('#chkCakeStructure').change(function() {
       $("#txtCakeStructure").prop("disabled", !$(this).is(':checked'));
   });
   
   
   function calculateSum() {
   
       var sum = 0;
   
       $(".textboxes").each(function() {
           if (!isNaN(this.value) && this.value.length != 0) {
               sum += parseFloat(this.value);
           }
       });
       $("#sum").html(sum.toFixed(2));
       $('#txtFinalExtraCharge').val(sum.toFixed(2));
       calculate_Final_SubTotal();
      
   }
   
   
   
   
   //Summary
   
     function calculate_Final_SubTotal() {
       var sum = 0;
       $(".final").each(function() {
           if (!isNaN(this.value) && this.value.length != 0) {
               sum += parseFloat(this.value);
           }
       });
   
        document.getElementById("txtFinalSubTotal").innerHTML = sum.toFixed(2); 
        calculate_Final_GrandTotal();

   
   }
   
   
    function calculate_Final_GrandTotal() {

              var subTot = document.getElementById("txtFinalSubTotal").innerHTML ;
              var discount =  $('#txtDiscount').val();
              var discountedAmnt = (parseFloat(subTot) -  parseFloat(discount)).toFixed(2);
              $('#txtDiscountedAmnt').val(discountedAmnt);

               var subTot = document.getElementById("txtFinalSubTotal").innerHTML ;
              var nbtRate =  $('#txtnbtRate').val();
              var nbtAmnt =  (parseFloat(nbtRate/100) *  parseFloat(subTot)).toFixed(2);
              $('#txtnbtAmnt').val(nbtAmnt);

              var subTot = document.getElementById("txtFinalSubTotal").innerHTML ;
              var vatRate =  $('#txtVatRate').val();
              var vatAmnt =  (parseFloat(vatRate/100) *  parseFloat(subTot)).toFixed(2);
              $('#txtVatAmnt').val(vatAmnt);


       var sum = 0;
       $(".grand").each(function() {
           if (!isNaN(this.value) && this.value.length != 0) {
               sum += parseFloat(this.value);
           }
       });
   
         if(sum==0)  
         {       
           document.getElementById("txtFinalGrandTotal").innerHTML = document.getElementById("txtFinalSubTotal").innerHTML;
           document.getElementById("txtFinalBalance").innerHTML = document.getElementById("txtFinalSubTotal").innerHTML;
         }         
         else{
         document.getElementById("txtFinalGrandTotal").innerHTML = sum.toFixed(2);
              var grandTot = document.getElementById("txtFinalGrandTotal").innerHTML ;
              var advance =  $('#txtAdvance').val();
              if(advance != "")
                  var balance =  (parseFloat(grandTot) -  parseFloat(advance)).toFixed(2);  
               else
                  var balance = document.getElementById("txtFinalGrandTotal").innerHTML ;               
              document.getElementById("txtFinalBalance").innerHTML = balance; 

  
         }
         
          
   }
   
   
   
   
   
   
   
   $(document).ready(function() {
   
   
     jQuery("#addBanquetRequestTab1").validationEngine();
     jQuery("#addBanquetRequestTab2").validationEngine();
     jQuery("#addBanquetRequestTab3").validationEngine();
   
   
   
       $(".textboxes").each(function() {
           $(this).keyup(function() {
               calculateSum();
           });
   
       });
   
   
   
       $("#txtDiscount").each(function() {
           $(this).keyup(function() {
              var subTot = document.getElementById("txtFinalSubTotal").innerHTML ;
              var discount =  $('#txtDiscount').val();
              var discountedAmnt = (parseFloat(subTot) -  parseFloat(discount)).toFixed(2);
              $('#txtDiscountedAmnt').val(discountedAmnt);
              calculate_Final_GrandTotal();
           });
       });
   
   
   
           $("#txtnbtRate").each(function() {
           $(this).keyup(function() {
              var subTot = document.getElementById("txtFinalSubTotal").innerHTML ;
              var nbtRate =  $('#txtnbtRate').val();
              var nbtAmnt =  (parseFloat(nbtRate/100) *  parseFloat(subTot)).toFixed(2);
              $('#txtnbtAmnt').val(nbtAmnt);
               calculate_Final_GrandTotal();
   
           });
        });
   
   
   
           $("#txtVatRate").each(function() {
           $(this).keyup(function() {
              var subTot = document.getElementById("txtFinalSubTotal").innerHTML ;
              var vatRate =  $('#txtVatRate').val();
              var vatAmnt =  (parseFloat(vatRate/100) *  parseFloat(subTot)).toFixed(2);
              $('#txtVatAmnt').val(vatAmnt);
               calculate_Final_GrandTotal();
   
           });
        });
   
   
            $("#txtAdvance").each(function() {
           $(this).keyup(function() {
              var grandTot = document.getElementById("txtFinalGrandTotal").innerHTML ;
              var advance =  $('#txtAdvance').val();
              var balance =  (parseFloat(grandTot) -  parseFloat(advance)).toFixed(2);              
              document.getElementById("txtFinalBalance").innerHTML = balance;             
             
              
           });
        });
   
           
   
   
   
   
   
   
   });
</script>



<style type="text/css">
   .nav-tabs{
   display:none;
   }
   .panel-body{
   margin-top: -30px;
   }
</style>