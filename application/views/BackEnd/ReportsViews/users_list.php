<style>

body {
    width: 600px;
    margin: 40px auto;
    font-family: 'Cambria';
    font-size: 12px;
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
     font-weight: 100px;
    
}


table trr:nth-child(odd) {
    background: #F1F1F1;
}

h2{
    text-align: center;
    font-size : 20px;
    color:#404040;
    margin-top: 200px 
}


  
</style>
<div>
<br/><br/><br/>
 <h2>User Information</h2>
<table   cellspacing="3" cellpadding="3">
   <tr>
      
      
      <th style="width: 15%;">FIRST NAME</th>
      <th style="width: 15%;">LAST NAME</th>
      <th >EMAIL</th>
      <th style="width: 50px; ">USER LEVEL</th>
      <th>REG. DATE</th>
      <th >NIC</th>
      <th>CONTACT #</th>     
   </tr>



   <?php                                            
      if (count($users)) 
      {                   
        foreach ($users as $list) 
        {
        echo "<tr>";
        echo "<td>". $list['firstname'] . " </td>";  
        echo "<td>". $list['lastname'] . "</td>"; 
        echo "<td>". $list['email'] . "</td>"; 
        echo "<td>". $list['admin_level'] . " </td>";  
        echo "<td>". date("d-m-Y", strtotime($list['date_created'] )). "</td>"; 
        echo "<td>". $list['NIC'] . "</td>";  
        echo "<td>". $list['phone'] . "</td>";                        
        echo "</tr>";                                                                 
        }
      }                                            
      ?>
</table>


</div>
</div>

