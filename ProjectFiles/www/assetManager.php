<!DOCTYPE html>
<html>
  <body>
    <table>
      <caption>Assets</caption> 
      <tr>
       <th>username</th>  
       <th>Device ID</th>
        <th>Model</th>
        <th>Purchase date</th>
        <th>Delete></td>
        
</tr>
<?php
include('web-db.php');
?>
<?php
  $q = $pdo->query("SELECT * FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID");
  while($row = $q->fetch()){
    ?>
  <tr>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['DeviceID']; ?></td>
    <td><?php echo $row['Model']; ?></td>
    <td><?php echo $row['purchased_On']; ?></td>    
    <td><a href="up.php?id=<?php echo $row['DeviceID']; ?>">Edit</a></td>
    <td><a href="del.php?id=<?php echo $row['DeviceID']; ?>">Delete</a></td>
  </tr>	
<?php  
 }
 ?>

</table>
</body>
</html>