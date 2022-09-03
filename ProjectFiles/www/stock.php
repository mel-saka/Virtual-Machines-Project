<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="table.css"> 
    <div class = "menu">
    <a href="assetManager.php">
        Assest Manager
    </a>
    <a href="renewal.php">
        Assest Renewal
    </a>
    <a href="#">
        Asset Store Manager 
    </a>
</div>
  </head>
  <body>
    <table>
      <caption>Available</caption> 
      <tr>
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
  $q = $pdo->query("SELECT * FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE Stat = 'Unutilised' AND purchased_On > DATE_SUB(NOW(),INTERVAL 23 MONTH)");

  

  while($row = $q->fetch()){
    $currDate = $row['purchased_On'];
    $changeDate = date("d-m-Y", strtotime($currDate));
    //if($currDate > DATE_SUB(NOW(),INTERVAL 23 MONTH )
 

    ?>
  <tr>
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

<table>
      <caption>Renewal List</caption> 
      <tr>
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
  $q = $pdo->query("SELECT * FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE Stat = 'Unutilised' AND purchased_On < DATE_SUB(NOW(),INTERVAL 23 MONTH)");
  while($row = $q->fetch()){
    $currDate = $row['purchased_On'];
    $changeDate = date("d-m-Y", strtotime($currDate));
    //if($currDate > DATE_SUB(NOW(),INTERVAL 23 MONTH )


    ?>
  <tr>
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