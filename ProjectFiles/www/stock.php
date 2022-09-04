<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="table.css"> 
<div class = "menu">
<a href="assetManager.php">
        Assest Database
    </a>
    <a href="renewal.php">
        Assest Renewal
    </a>
    <a href="user.php">
       User Database
    </a>
    <a href="dash.php">
        Requests Dashboard
     </a>
</div>
<head>
<?php
include('web-db.php');
 $c = $pdo->query("SELECT count(*) FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE Stat = 'Unutilised' AND purchased_On > DATE_SUB(NOW(),INTERVAL 23 MONTH)");
 $count = $c->fetch();
 $num = $count[0];
 if($num != 0){
?>
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
<?php
 }
?>
<?php
 $c = $pdo->query("SELECT count(*) FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE Stat = 'Unutilised' AND purchased_On < DATE_SUB(NOW(),INTERVAL 23 MONTH)");
 $count = $c->fetch();
 $num = $count[0];
 if($num != 0){
?>
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
<?php
 }
?>
<?php
 $c1 = $pdo->query("SELECT count(*) FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE Stat = 'Unutilised' AND purchased_On < DATE_SUB(NOW(),INTERVAL 23 MONTH)");
 $count1 = $c1->fetch();
 $num1 = $count1[0];
 $c2 = $pdo->query("SELECT count(*) FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE Stat = 'Unutilised' AND purchased_On > DATE_SUB(NOW(),INTERVAL 23 MONTH)");
 $count2 = $c2->fetch();
 $num2 = $count2[0];
 if($num1 == 0 && $num2 == 0){
?>
 <table>
 <caption>Stock is Empty!</caption> 
</table>
<?php
 }
?>
</body>
</html>