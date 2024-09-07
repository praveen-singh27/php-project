<?php
include"connection.php";
$query= "SELECT * FROM form";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total != 0)
{
   ?>
   <table  border="2" align="center" cellspacing="0" cellpadding="15">
      <tr><th align="center" colspan="100%" > <h2><mark > RECORDS </mark></h2></th></tr>
      <tr bgcolor="646FD4">
         <th >First Name</th>
         <th>Last Name</th>
         <th>Email </th>
         <th>Password </th>
         <th>Confirm Password</th>
         <th>Gender</th>
         <th>Country</th>
      </tr>
  
<?php
 while($row=mysqli_fetch_assoc($data)){
   
    echo "<tr>
               <td>".$row['First_Name']."</td>
               <td>".$row['Last_Name']."</td>
               <td>".$row['Email']."</td>
               <td>".$row['Password']."</td>
               <td>".$row['Confirm_Password']."</td>
               <td>".$row['Gender']."</td>
               <td>".$row['Country']."</td>

         </tr>";
         
 }

}
else{
   echo "No Records found!!";
}

?>
</table>

