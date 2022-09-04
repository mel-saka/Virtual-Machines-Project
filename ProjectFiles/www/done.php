

<?php
include('web-db.php');
?>
<?php
$id = $_GET['id']; // get id through query string

$del = $pdo->query("delete from Requests where RequestID  = '$id'");
//header("location: assetManager.php"); 
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>