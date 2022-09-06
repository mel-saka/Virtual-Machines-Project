

<?php
include('web-db.php');
//Deletes resolved tickets
?>
<?php
$id = $_GET['id']; 

$del = $pdo->query("delete from Requests where RequestID  = '$id'");

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>