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


  
</style>

 <div> <h2>Beverage Menu Information</h2>
<br/>



<table   cellspacing="3" cellpadding="3">
   <tr>
      
      
      <th style="width: 12%;">BEVERAGE CODE</th>
      <th>BEVERAGE NAME</th>
      <th > RS.</th>
      <th style="width: 100px; "> $. </th>
      <th>DESCRIPTION</th>
   
   </tr>


   <?php                                            
      if (count($menu)) 
      {                   
        foreach ($menu as $list) 
        {
        echo "<tr>";  
        echo "<td>". $list['beverage_code'] . "</td>"; 
        echo "<td>". $list['beverage_name'] . "</td>"; 
        echo "<td>". $list['local_price'] . " </td>";  
        echo "<td>". $list['foreign_price'] . "</td>"; 
        echo "<td>". $list['description'] . "</td>";                         
        echo "</tr>";                                                                 
        }
      }                                            
      ?>
</table>


</div>
</div>

