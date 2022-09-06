<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$pdo = require_once 'web-db.php';
?>
<?php

$error = "0";

if(isset($_POST['sbt'])){
   
   
    if(empty($_POST['FirstName']) && empty($_POST['LastName'])&& empty($_POST['User'])){
        echo "Error: All fields are required\n";
        $error = "1";
    }
    $S_ID = $_POST['StaffID'];

    $InputUser = $_POST['User'];
    $U = $pdo->query("SELECT count(*) FROM Staff WHERE username = '$InputUser'");
    $count = $U->fetch();
    $User_num = $count[0];
 
    if($User_num == 0){
        $User = $_POST['User'];
    }else{
        echo "Error: Username already exists\n";
        $error = '1';
    }
    
  
    if($error == "0"){
        $F_name = $_POST['FirstName'];
        $L_name = $_POST['LastName'];
        $Insert = $pdo->query("INSERT INTO  Staff SET username = '$User',  FirstName = '$F_name ', LastName = '$L_name'");
      // echo $Update;
 
      header("location: user.php"); 
    }
  
}

?>
