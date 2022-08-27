
<?php
include('web-db.php');
?>
<?php
$id = $_GET['id']; // get id through query string

$up = $pdo->query("SELECT * FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE DeviceID = '$id'");
$nRows = $pdo->query("SELECT count(*) FROM Devices LEFT JOIN Staff ON Devices.StaffID = Staff.StaffID WHERE DeviceID = '$id'")->fetchColumn(); 
if($nRows == 1){
    while($row = $up->fetch()){
    $usr = $row['username'];
    $D_ID = $row['DeviceID'];
    $mod= $row['Model'];
    $currDate = $row['purchased_On'];
    }
}
?>
<form action = "add.php" method="post">
  <label for="DeviceID">DeviceID:</label><br>
  <input type="text" id="DeviceID" name="DeviceID" value = "<?php echo $D_ID; ?>"><br>  
  <label for="User">User:</label><br>
  <input type="text" id="User" name="User" value = "<?php echo $usr; ?>" ><br>
  <label for="Model">Model:</label><br>
  <input type="text" id="Model" name="Model" value = "<?php echo $mod; ?>" ><br>
  <label for="Purchase">Purchase Date:</label><br>
  <input type="date" id="purchase" name="purchase" value = "<?php echo $currDate; ?>"  ><br>
  <button type="submit" name="sbt">Save</button>
</form>