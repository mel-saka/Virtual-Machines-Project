

<?php
include('web-db.php');
?>
<?php
$id = $_GET['id']; // get id through query string

$del = $pdo->query("delete from Devices where DeviceID  = '$id'");
header("location: assetManager.php"); 

?>