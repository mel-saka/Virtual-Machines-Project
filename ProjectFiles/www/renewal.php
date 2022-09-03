<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="table.css"> 
    <div class = "menu">
    <a href="assetManager.php">
        Assest Manager
    </a>
    <a href="stock.php">
        New Assets Stock 
    </a>
    <a href="#">
        Asset Store Manager 
    </a>
</div>
  </head>
  <body>
      <div class="cont">
      <div class = "ta">
    <table>
      <caption>Damaged Assets</caption> 
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
  $q = $pdo->query("SELECT * FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE Stat = 'Damaged' ");
  while($row = $q->fetch()){
    $currDate = $row['purchased_On'];
    $changeDate = date("d-m-Y", strtotime($currDate));
    ?>
  <tr>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['AssetTag']; ?></td>
    <td><?php echo $row['Model']; ?></td>
    <td><?php echo $changeDate; ?></td>
    <td><?php echo $row['Stat']; ?></td>    
    <td><a href="replace.php?id=<?php echo $row['DeviceID']; ?>">Edit</a></td>
    <td><a href="del.php?id=<?php echo $row['DeviceID']; ?>">Delete</a></td>
  </tr>	
<?php  
 }
 ?>

</table>
</div>
<div class = "ta">
<table>
      <caption>Due For Replacement</caption> 
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
  $q = $pdo->query("SELECT * FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE purchased_On <= DATE_SUB(NOW(),INTERVAL 3 YEAR) 
  AND Stat = 'Active' ");
  while($row = $q->fetch()){
    $currDate = $row['purchased_On'];
    $changeDate = date("d-m-Y", strtotime($currDate));
    ?>
  <tr>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['AssetTag']; ?></td>
    <td><?php echo $row['Model']; ?></td>
    <td><?php echo $changeDate; ?></td>
    <td><?php echo $row['Stat']; ?></td>    
    <td><a href="replace.php?id=<?php echo $row['DeviceID']; ?>">Edit</a></td>
    <td><a href="del.php?id=<?php echo $row['DeviceID']; ?>">Delete</a></td>
  </tr>	
<?php  
 }
 ?>

</table>
</div>
<div class = "ta">
<table>
      <caption>Due Replacements for the upcoming Month </caption> 
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
  $q = $pdo->query("SELECT * FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE purchased_On <= DATE_SUB(NOW(),  INTERVAL 35 MONTH )
  AND purchased_On>= DATE_SUB(NOW(), INTERVAL 36 MONTH  )"); 
  while($row = $q->fetch()){
    $currDate = $row['purchased_On'];
    $changeDate = date("d-m-Y", strtotime($currDate));
    ?>
  <tr>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['AssetTag']; ?></td>
    <td><?php echo $row['Model']; ?></td>
    <td><?php echo $changeDate; ?></td>
    <td><?php echo $row['Stat']; ?></td>    
    <td><a href="replace.php?id=<?php echo $row['DeviceID']; ?>">Edit</a></td>
    <td><a href="del.php?id=<?php echo $row['DeviceID']; ?>">Delete</a></td>
  </tr>	
<?php  
 }
 ?>

</table>
</div>
<table>
      <caption>Due Replacements for the upcoming Year </caption> 
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
 $q = $pdo->query("SELECT * FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE purchased_On <= DATE_SUB(NOW(),  INTERVAL 23 MONTH )
 AND purchased_On>= DATE_SUB(NOW(), INTERVAL 35 MONTH  )"); 
  while($row = $q->fetch()){
    $currDate = $row['purchased_On'];
    $changeDate = date("d-m-Y", strtotime($currDate));
    ?>
  <tr>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['AssetTag']; ?></td>
    <td><?php echo $row['Model']; ?></td>
    <td><?php echo $changeDate; ?></td>
    <td><?php echo $row['Stat']; ?></td>    
    <td><a href="replace.php?id=<?php echo $row['DeviceID']; ?>">Edit</a></td>
    <td><a href="del.php?id=<?php echo $row['DeviceID']; ?>">Delete</a></td>
  </tr>	
<?php  
 }
 ?>

</table>
</div>
</div>
</body>
</html>