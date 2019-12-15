<style>

body {
    width: 600px;
    margin: 40px auto;
    font-family: 'Cambria';
    font-size: 13px;
    color: black;
    font-weight: 100;
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
    /*border-style: solid;
    border-bottom-width: 1px;  
    border-bottom-color: #F1F1F1;*/
    
    
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

  .tot {
   color: #ffffff;
   background-color: #44525B; 
   }
   .amnt{
   text-align: right;
   }

  
</style>
<html>
   <head>
      <title>
         Banquet Reservation Invoice 
         <link rel='shortcut icon' href='<?php echo base_url(); ?>assets/BackEnd/favicon.ico'>
      </title>
   </head>
   <body>
      <h2><?php echo $basicInfo[0]['resNo'] ?> &#160; INVOICE</h2>
      <br/>
      <table >
      <tbody>
         <tr>
            <td >
               <table >
                  <tr>
                     <?php echo "
                        <td> Customer  </td>
                        <td><b>: ". $basicInfo[0]['customer']." </b></td>                         
                        </tr>
                        <tr>
                        <td> Contact  </td>
                        <td>: ". $basicInfo[0]['contact']." </td> 
                         
                        </tr>
                        
                        <tr>
                        <td width ='60px'><br><br>Event  </td>
                        <td ><br><br><b>: ". $basicInfo[0]['type']." </b>  </td>
                        </tr>
                        
                        <tr>
                        <td >Date  </td>
                        <td ><b>: ". $basicInfo[0]['date']." </b>(". $basicInfo[0]['time'].".00 hrs) </td>
                        </tr>
                        
                        <tr>
                        <td >Menu  </td>
                        <td >: ". $basicInfo[0]['menu_no']." - Rs.". $basicInfo[0]['local_price']."  </td>
                        </tr>
                        
                        <tr>
                        <td >Guest #  </td>
                        <td >: ". $basicInfo[0]['guest_count']."  </td>
                        </tr>
                        
                        <tr>
                        <td >Banquet </td>
                        <td >: ". $basicInfo[0]['hall_name']."  </td>
                        </tr>"?>
                        <tr>
                          <td colspan ="2"> 
                            <br><br>

                              <b>TERMS & CONDITITION</b>
                              <br><br> - Payment Must be done one week before the Event
                              <br><br> - Advanced payment wiil be cut off if any damage has been done.
                                      <br> &#160; (it will calculate based on the damage)
                              <br><br> - Night Time Event should be end before 11.30 PM
                            <br><br><br>__________________________<br>
                           Signature of the Client 
                           
                        </tr>

                          <tr>
                          <td colspan ="2"> <br>__________________________<br>
                           Signature of the Manager                            
                        </tr>


                          <tr>
                          <td colspan ="2"> <br>__________________________<br>
                           Date 
                           </td>
                        </tr>


                        
                        </table> 
                     </td>
                     <td>
                        <table>
                           <tr>
                              <td  colspan="2"><b>Extra Facilities </b></td>
                           </tr>
                           <?php 
                              if($extraCharge[0]['liqueur'] > 0.00){
                              echo "<tr><td > Liqueur</td>
                               <td class='amnt'> ". $extraCharge[0]['liqueur']." </td></tr>";
                              }
                              
                              
                              if($extraCharge[0]['poruwa'] > 0.00){
                              echo "<tr><td > Poruwa</td>
                               <td class='amnt'> ". $extraCharge[0]['poruwa']." </td></tr>";
                              }
                              
                              if($extraCharge[0]['musicGroup'] > 0.00){
                              echo "<tr><td > Music Group</td>
                               <td class='amnt'> ". $extraCharge[0]['musicGroup']." </td></tr>";
                              }
                              
                              if($extraCharge[0]['dancingGroup'] > 0.00){
                              echo "<tr><td > Dancing Group</td>
                               <td class='amnt'> ". $extraCharge[0]['dancingGroup']." </td></tr>";
                              }
                              
                              if($extraCharge[0]['flowerArrengement'] > 0.00){
                              echo "<tr><td >Flower Arrengement </td>
                               <td class='amnt'> ". $extraCharge[0]['flowerArrengement']." </td></tr>";
                              }
                              
                              
                              if($extraCharge[0]['cakeStructure'] > 0.00){
                              echo "<tr><td >Cake Structure </td>
                               <td class='amnt'> ". $extraCharge[0]['cakeStructure']." </td></tr>";
                              }
                              
                              
                              ?>
                        </table>
                       

                         <table>
                           <tr>
                              <td  colspan="2"><br/><br/><b>Menu Item Requests </b></td>
                           </tr>
                           <?php 

                              if (count($menuCharge)) 
                               {                   
                                 foreach ($menuCharge as $list) 
                                 {
                                 echo "<tr>";  
                                 echo "<td>". $list['descrip'] . "</td>"; 
                                 echo "<td >". $list['quantity'] . " * Rs.". $list['unit_price'] . "</td>";
                                 echo "<td class='amnt'>". number_format(($list['quantity'] * $list['unit_price']),2). " </td>";                                       
                                 echo "</tr>";                                                                 
                                 }
                               }                                            
                               ?>
                        </table>



                         <table>
                           <tr>
                              <td  colspan="2"><br/><br/><b>Other Charges </b></td>
                           </tr>
                           <?php 
                              if (count($other)) 
                               {                   
                                 foreach ($other as $list) 
                                 {
                                 echo "<tr>";  
                                 echo "<td>". $list['description'] . "</td>"; 
                                 echo "<td class='amnt'>". $list['cost'] . "</td>";                                      
                                 echo "</tr>";                                                                 
                                 }
                               }                                            
                               ?>
                        </table>

                        

                        <table  >
                           <tr>
                              <td  width='200px' ><br><br/> Banquet Charge </td>
                              <td class='amnt'> <br><br/><?php echo "". $charges[0]['banquet_charge']."  </td>
                                 </tr>
                                 <tr>
                                    <td> Total Extra Facility Charges  </td>
                                    <td class='amnt'> ". $charges[0]['extra_facility_charge']."</td>
                                 </tr>
                                 <tr>
                                    <td> Total Menu Request Charge  </td>
                                    <td class='amnt'>". $charges[0]['menu_request_charge']." </td>
                                 </tr>
                                 <tr >
                                    <td> Total Other Charges  </td>
                                    <td class='amnt'> ". $charges[0]['other_charge']."</td>
                                 </tr>
                                 <tr >
                                    <td class='tot'>SUB TOTAL    </td>
                                    <td class='tot amnt'> ". $charges[0]['sub_total']." </td>
                                 </tr>
                                 <tr>
                                    <td> Discount </td>
                                    <td class='amnt'> ". $charges[0]['discount']."</td>
                                 </tr>
                                 
                                 <tr>
                                    <td> Discounted Amount</td>
                                    <td class='amnt'> ". $charges[0]['dis_ammount']."</td>
                                 </tr>
                                 
                                 <tr>
                                    <td> NBT (". $charges[0]['nbt_rate']."%) </td>
                                    <td class='amnt'>". $charges[0]['nbt_ammount']." </td>
                                 </tr>
                                 <tr>
                                    <td> VAT (". $charges[0]['vat_rate']."%)</td>
                                    <td class='amnt'>". $charges[0]['vat_ammount']." </td>
                                 </tr>
                                 <tr class='tot'>
                                    <td class='tot'>  GRAND TOTAL   </td>
                                    <td class='tot amnt'>". $charges[0]['grand_total']." </td>
                                 </tr>
                                 <tr>
                                    <td> Advance </td>
                                    <td class='amnt'>". $charges[0]['first_payment']."</td>
                                 </tr>
                                 <tr >
                                    <td  class='tot'>  BALANCE</td>
                                    <td class='tot amnt'> ". $charges[0]['balance_after_first_pay']."</td>
                                 </tr>";
                                 ?>
                        </table>
                     </td>
                  </tr>
                  </tbody>
               </table>
   </body>
</html>
