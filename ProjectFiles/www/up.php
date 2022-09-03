
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
    $tag= $row['AssetTag'];
    $currDate = $row['purchased_On'];
    $status =   $row['Stat'];
    }
}
?>
 <link rel="stylesheet" type="text/css" href="form.css"> 
<form action = "add.php" method="post">

  <input type="hidden" id="DeviceID" name="DeviceID" value = "<?php echo $D_ID; ?>"><br>
  <input type="hidden" id="OgTag" name="OgTag" value = "<?php echo $tag; ?>"><br> 
  <label for="AssetTag">Asset Tag</label><br>
  <input type="Text" id="AssetTag" name="AssetTag" value = "<?php echo $tag; ?>"><br>   
  <label for="User">User:</label><br>
  <input type="text" id="User" name="User" value = "<?php echo $usr; ?>" ><br>
  <label for="Model">Model:</label><br>
  <input type="text" id="Model" name="Model" value = "<?php echo $mod; ?>" ><br>
  <label for="Purchase">Purchase Date:</label><br>
  <input type="date" id="purchase" name="purchase" value = "<?php echo $currDate; ?>"><br>
  <label for="Status">Status:</label><br>
  <select id="Status" name="Status" value = "<?php echo  $status; ?>"><br>
    <option value="Active">Active</option>
    <option value="Unutilised">Unutilised</option>
    <option value="Damaged">Damaged</option>
    <option value="decommisioned">decommisioned</option>
</select>
  <button type="submit" name="sbt">Save</button>
</form>