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
<div>
   <h2>Room Information</h2>
   <br/>
   <h3 algin="left">Room Type Foregin Charges Information</h3>
   <br>
   <table>
      <thead>
         <tr>
            <th scope="col">Type</th>
            <th scope="col">Breakfast</th>
            <th scope="col">lunch</th>
            <th scope="col">Dinner</th>
            <th scope="col">Room Only</th>
            <th scope="col">Bed & Breakfast</th>
            <th scope="col">Half Board</th>
            <th scope="col">Full Board</th>
         </tr>
      </thead>
      <tbody>
         <?php                                            
            if (count($foreign)) 
            {                   
              foreach ($foreign as $list) 
              {
              echo "<tr>"; 
              echo "<td>". $list['type'] . "</td>";                
              echo "<td>". $list['breakfast'] . "</td>"; 
              echo "<td>". $list['lunch'] . " </td>";  
              echo "<td>". $list['dinner'] . "</td>"; 
              echo "<td>". $list['ro'] . "</td>"; 
              echo "<td>". $list['bb'] . "</td>"; 
              echo "<td>". $list['hb'] . " </td>";  
              echo "<td>". $list['fb'] . "</td>"; 
                                     
              echo "</tr>";                                                                 
              }
            }                                            
            ?>
      </tbody>
   </table>
   <br/>
   <h3 algin="left">Room Type Local Charges Information</h3>
   <br>
   <table>
      <thead>
         <tr>
            <th scope="col">Type</th>
            <th scope="col">Breakfast</th>
            <th scope="col">lunch</th>
            <th scope="col">Dinner</th>
            <th scope="col">Room Only</th>
            <th scope="col">Bed & Breakfast</th>
            <th scope="col">Half Board</th>
            <th scope="col">Full Board</th>
         </tr>
      </thead>
      <tbody>
         <?php                                            
            if (count($local)) 
            {                   
              foreach ($local as $list) 
              {
              echo "<tr>"; 
              echo "<td>". $list['type'] . "</td>";   
              echo "<td>". $list['breakfast'] . "</td>"; 
              echo "<td>". $list['lunch'] . " </td>";  
              echo "<td>". $list['dinner'] . "</td>"; 
               echo "<td>". $list['ro'] . "</td>"; 
              echo "<td>". $list['bb'] . "</td>"; 
              echo "<td>". $list['hb'] . " </td>";  
              echo "<td>". $list['fb'] . "</td>";  
                                     
              echo "</tr>";                                                                 
              }
            }                                            
            ?>
      </tbody>
   </table>
    <br/><br/> <br/>
   <h3 algin="center">Room Numbers by Room Type</h3>
   <br/><br/> 

   <table>
    
      <tbody>

        <tr>
          <td >
            <table  >
              <tr><th> <b>Suite Rooms By No</b></th></tr><br/>
              <?php                                            
            if (count($suite_roomNo)) 
            {                   
              foreach ($suite_roomNo as $list) 
              {
              echo "<tr>";                 
              echo "<td> Room # : ". $list['room_no'] . "</td>"; 
              echo "</tr>";                                                                 
              }
            }                                            
          ?>
            </table>
          </td>

          <td>
            <table>
               <tr><th> <b>Standard Rooms By No</b></th></tr><br/>
              <?php                                            
            if (count($standard_roomNo)) 
            {                   
              foreach ($standard_roomNo as $list) 
              {
              echo "<tr>"; 
              
              echo "<td> Room # : ". $list['room_no'] . "</td>"; 
              echo "</tr>";                                                                 
              }
            }                                            
          ?>
            </table>
          </td>



          <td>
            <table>
               <tr><th> <b>Delux Rooms By No</b></th></tr><br/>
              <?php                                            
            if (count($delux_roomNo)) 
            {                   
              foreach ($delux_roomNo as $list) 
              {
              echo "<tr>"; 
              
              echo "<td> Room # : ". $list['room_no'] . "</td>"; 
              echo "</tr>";                                                                 
              }
            }                                            
          ?>
            </table>
          </td>
        </tr>
      </tbody>
   </table>
</div>

<script type="text/javascript">

   $( document ).ready(function(){
    
   });
   
</script>