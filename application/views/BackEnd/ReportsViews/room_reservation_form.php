<style>
   body {
   width: 600px;
   margin: 40px auto;
   font-family: 'Cambria';
   font-size: 11px;
   color: black;
   }
   table {
   border-collapse: collapse; /* IE7 and lower */
   border-spacing: 0;
   width: 100%; 
   margin-left: 20px;  
   margin-right: 20px;  
   }
   table th{
   background-color: #F1F1F1;    
   height:35px;
   text-align: left;
   }
   table tr{
   border-style: solid;
   border-bottom-width: 1px;  
   border-bottom-color: #F1F1F1;
   }
   table trr:nth-child(odd) {
   background: #F1F1F1;
   }
   h2{
   text-align: center;
   font-size : 20px;
   color:#404040;
   }
   @media print {
   thead {display: table-header-group;}
   }
</style>

   <h2>Room Reservation Invoice</h2>
   <br/>
   <h3 algin="left">Reservation No: #<?php echo $res_data[0]->reservation_no; ?></h3>
   <h3 algin="left">Created on No: #<?php echo date('Y-m-d'); ?></h3>
   <br>

   <table width="200" border="0">
	  <tr>
	    <th width="49%"><strong>Client Information</strong></th>
	    <th width="6%">&nbsp;</th>
	    <th width="45%"><strong>Room Details</strong></th>
     </tr>
	  <tr>
	    <td valign="top"><div align="left">
        <table width="100%" border="0">
	      <tr>
	        <th width="44%"><strong>Name:</strong></th>
	        <td width="56%"><?php echo $res_data[0]->title.'. '.$res_data[0]->f_name.' '.$res_data[0]->l_name; ?></td>
          </tr>
	      <tr>
	        <th><strong>Address:</strong></th>
	        <td><?php echo $res_data[0]->address_1; ?></td>
          </tr>
	      <tr>
	        <th><strong>Tel:</strong></th>
	        <td><?php echo $res_data[0]->phone ; ?></td>
          </tr>
	      <tr>
	        <th><strong>Email:</strong></th>
	        <td><?php echo $res_data[0]->email; ?></td>
          </tr>
        </table></div></td>
	    <td>&nbsp;</td>
	    <td>
        	<?php foreach($res_data as $res){ ?>
				<p><?php echo "<b>Room Type:</b>".$res->type; ?></p>
                <p><?php echo "<b>Room No:</b>".$res->room_no; ?></p>
			<?php } ?>
        </td>
     </tr>
	  <tr>
	    <th colspan="3"><div align="center">Payment</div></th>
     </tr>
	  <tr>
	    <td colspan="3" align="left">
        <table width="80%" border="0">
	      <tr>
	        <th width="19%">Room Charges</th>
	        <td width="14%" align="right"><div align="right"><?php echo $res_data[0]->room_charges; ?></div></td>
	        <td width="10%">&nbsp;</td>
	        <th width="27%">Meal Charges</th>
	        <td width="30%" align="right"><div align="right"><?php echo $res_data[0]->meal_charges; ?></div></td>
          </tr>
	      <tr>
	        <td>&nbsp;</td>
	        <td>&nbsp;</td>
	        <td>&nbsp;</td>
	        <th>Total Charges</th>
	        <td align="right"><div align="right"><?php echo number_format($res_data[0]->total_charges, 2); ?></div></td>
          </tr>
	      <tr>
	        <th>Discount</th>
	        <td align="right"><div align="right"><?php echo $res_data[0]->discount; ?>%</div></td>
	        <td>&nbsp;</td>
	        <th>Discount Amount</th>
	        <td align="right"><div align="right"><?php echo $res_data[0]->discount_amount; ?></div></td>
          </tr>
	      <tr>
	        <th>NBT</th>
	        <td align="right"><div align="right"><?php echo $res_data[0]->nbt; ?>%</div></td>
	        <td>&nbsp;</td>
	        <th>VAT</th>
	        <td align="right"><div align="right"><?php echo $res_data[0]->vat; ?>%</div></td>
          </tr>
	      <tr>
	        <td height="35" colspan="4" bgcolor="#FFFF7D"><strong>Grant Total
            </ttdh>
	        </strong>
	        <td align="right" bgcolor="#FFFF7D"><div align="right"><?php echo number_format($res_data[0]->grand_total, 2); ?></div></td>
          </tr>
	      <tr>
	        <td colspan="3">&nbsp;</td>
	        <th>Advance</th>
	        <td align="right"><div align="right"><?php echo $res_data[0]->advance; ?></div></td>
          </tr>
	      <tr>
	        <td colspan="3">&nbsp;</td>
	        <th>Balance</th>
	        <td align="right"><div align="right"><?php echo $res_data[0]->balance; ?></div></td>
          </tr>
        </table></td>
     </tr>
	  <tr>
	    <th>Payment Date:</th>
	    <td>&nbsp;</td>
	    <td><?php echo $res_data[0]->payement_date; ?></td>
     </tr>
	  <tr>
	    <th>Advance Payment Date:</th>
	    <td>&nbsp;</td>
	    <td><?php echo $res_data[0]->advance_payement_date; ?></td>
     </tr>
	  <tr>
	    <th>Payment Method:</th>
	    <td>&nbsp;</td>
	    <td><?php echo $res_data[0]->payement_method; ?></td>
     </tr>
   </table>
   <script type="text/javascript">

   $( document ).ready(function(){
    
   });
   
</script>