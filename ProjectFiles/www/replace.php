
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
<form action = "Swap.php" method="post">

  <input type="hidden" id="DeviceID" name="DeviceID" value = "<?php echo $D_ID; ?>"><br>
  <label for="AssetTag">Asset Tag</label><br>
  <input type="Text" id="AssetTag" name="AssetTag" value = "<?php echo $tag; ?>"readonly><br>   
  <label for="User">User:</label><br>
  <input type="text" id="User" name="User" value = "<?php echo $usr; ?>" readonly><br>
  <label for="Model">Model:</label><br>
  <input type="text" id="Model" name="Model" value = "<?php echo $mod; ?>" readonly><br>
  <label for="Purchase">Purchase Date:</label><br>
  <input type="date" id="purchase" name="purchase" value = "<?php echo $currDate; ?>" readonly><br>
  <label for="Status">Status:</label><br>
  <input type="text" id="Status" name="Status" value = "<?php echo $status; ?>" readonly><br>
  REPLACE WITH:
  <select id="Replace" name="Replace">
        <?php
  $Stock = $pdo->query("SELECT * FROM Devices WHERE  Stat = 'Unutilised' AND purchased_On > DATE_SUB(NOW(),INTERVAL 23 MONTH)");
  while($row = $Stock->fetch()){
    ?>
    <option value="<?php echo  $row['AssetTag']; ?>"><?php echo  $row['AssetTag']; ?> </option> 
<?php  
 }
 ?>  
     </select >
     <button type="submit" name="sbt">Save</button>
    </form>
    <br>
</body>