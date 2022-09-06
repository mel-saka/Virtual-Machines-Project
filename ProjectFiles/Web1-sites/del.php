

<?php
include('web-db.php');
//This file runs an Sql query to delete assets from the databse.
?>
<?php
$id = $_GET['id']; 

$del = $pdo->query("delete from Devices where DeviceID  = '$id'");
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>