<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="table.css"> 
    <div class = "menu">
    <a href="renewal.php">
        Assest Renewal
    </a>
    <a href="stock.php">
        New Assets Stock 
    </a>
    <a href="user.php">
       User Database
    </a>
    <a href="dash.php">
        Requests Dashboard
     </a>
</div>
  </head>
  <body>
  <a href="new.php">Add Device</a>
    <table>
      <caption>Assets</caption> 
      <tr>
       <th>StaffID</th> 
       <th>User</th>  
       <th>Asset Tag</th>
        <th>Model</th>
        <th>Purchase date</th>
        <th>Status</th>
        <th>Edit</td>
        <th>Delete</td>
        
</tr>
<?php
include('web-db.php');
?>
<?php
  $q = $pdo->query("SELECT * FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID");
  while($row = $q->fetch()){
    $currDate = $row['purchased_On'];
    $changeDate = date("d-m-Y", strtotime($currDate));
    ?>
  <tr>
   <td><?php echo $row['StaffID']; ?></td>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['AssetTag']; ?></td>
    <td><?php echo $row['Model']; ?></td>
    <td><?php echo $changeDate; ?></td>
    <td><?php echo $row['Stat']; ?></td>    
    <td><a href="up.php?id=<?php echo $row['DeviceID']; ?>">Edit</a></td>
    <td><a href="del.php?id=<?php echo $row['DeviceID']; ?>">Delete</a></td>
  </tr>	
<?php  
 }
 ?>

</table>
</body>
</html>