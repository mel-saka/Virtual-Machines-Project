<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="table.css"> 
    <div class = "menu">
    <a href="assetManager.php">
        Assest Database
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
  <?php
include('web-db.php');
 $c = $pdo->query("SELECT count(*) FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE Stat = 'Damaged' ");
 $count = $c->fetch();
 $num = $count[0];
 if($num != 0){
?>
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
    <td><a href="replace.php?id=<?php echo $row['DeviceID']; ?>">Update</a></td>
    <td><a href="del.php?id=<?php echo $row['DeviceID']; ?>">Delete</a></td>
  </tr>	
<?php  
 }
 ?>

</table>
</div>
<?php
 }
?>
  <?php
include('web-db.php');
 $c = $pdo->query("SELECT count(*) FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE purchased_On <= DATE_SUB(NOW(),INTERVAL 3 YEAR) 
 AND Stat = 'Active' ");
 $count = $c->fetch();
 $num = $count[0];
 if($num != 0){
?>
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
  AND Stat = 'Active'");
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
    <td><a href="replace.php?id=<?php echo $row['DeviceID']; ?>">Update</a></td>
    <td><a href="del.php?id=<?php echo $row['DeviceID']; ?>">Delete</a></td>
  </tr>	
<?php  
 }
 ?>

</table>
</div>
<?php
 }
?>
  <?php
include('web-db.php');
 $c = $pdo->query("SELECT count(*) FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE purchased_On <= DATE_SUB(NOW(),  INTERVAL 35 MONTH )
 AND purchased_On>= DATE_SUB(NOW(), INTERVAL 36 MONTH  ) AND Stat = 'Active'"); 
 $count = $c->fetch();
 $num = $count[0];
 if($num != 0){
?>
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
  AND purchased_On>= DATE_SUB(NOW(), INTERVAL 36 MONTH ) AND Stat = 'Active'"); 
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
    <td><a href="replace.php?id=<?php echo $row['DeviceID']; ?>">Update</a></td>
    <td><a href="del.php?id=<?php echo $row['DeviceID']; ?>">Delete</a></td>
  </tr>	
<?php  
 }
 ?>

</table>
</div>
<?php
 }
?>
 <?php
include('web-db.php');
$q = $pdo->query("SELECT * FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE purchased_On <= DATE_SUB(NOW(),  INTERVAL 23 MONTH )
AND purchased_On>= DATE_SUB(NOW(), INTERVAL 35 MONTH  ) AND Stat = 'Active'"); 
$num = $count[0];
 if($num != 0){
?>
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
 AND purchased_On>= DATE_SUB(NOW(), INTERVAL 35 MONTH  ) AND Stat = 'Active'"); 
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
    <td><a href="replace.php?id=<?php echo $row['DeviceID']; ?>">Update</a></td>
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
include('web-db.php');
$c1 = $pdo->query("SELECT count(*) FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE Stat = 'Damaged' ");
$count1 = $c1->fetch();
$num1 = $count1[0];

$c2 = $pdo->query("SELECT count(*) FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE purchased_On <= DATE_SUB(NOW(),INTERVAL 3 YEAR) 
AND Stat = 'Active' ");
$count2 = $c2->fetch();
$num2 = $count2[0];

$c3 = $pdo->query("SELECT count(*) FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE purchased_On <= DATE_SUB(NOW(),  INTERVAL 35 MONTH )
AND purchased_On>= DATE_SUB(NOW(), INTERVAL 36 MONTH  ) AND Stat = 'Active'"); 
$count3 = $c3->fetch();
$num3 = $count3[0];

$c4 = $pdo->query("SELECT count(*) FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE Stat = 'Damaged' ");
$count4 = $c4->fetch();
$num4 = $count4[0];
 if($num1 == 0 && $num2 == 0 && $num3 == 0 && $num4 == 0){
?>
<table>
      <caption>No Upcoming Replacemets Due For The Next Year!</caption> 
 </table>
 <?php
 }
?>
</div>
</div>
</body>
</html>