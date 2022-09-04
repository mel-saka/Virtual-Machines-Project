<?php
include('web-db.php');
?>
<?php
$id = $_GET['id']; // get id through query string
$SUpdate = $pdo->query("UPDATE Devices SET StaffID = '1', Stat = 'Unutilised' WHERE StaffID = '$id'");
$del = $pdo->query("delete from Staff where StaffID  = '$id'");

//header("location: assetManager.php"); 
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>