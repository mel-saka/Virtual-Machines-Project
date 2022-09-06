<?php
include('web-db.php');
//This file runs an Sql query to delete users from the databse.
?>
<?php
$id = $_GET['id']; 
$SUpdate = $pdo->query("UPDATE Devices SET StaffID = '1', Stat = 'Unutilised' WHERE StaffID = '$id'");
$del = $pdo->query("delete from Staff where StaffID  = '$id'");

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>