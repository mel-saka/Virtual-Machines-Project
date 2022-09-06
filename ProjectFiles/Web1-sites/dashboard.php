<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$pdo = require_once 'web-db.php';
?>
<?php

$error = "0";

if(isset($_POST['sbt'])){
if($_POST['FormID'] == "NewAccount"){
  if(empty($_POST['FirstName']) && empty($_POST['LastName'])&& empty($_POST['username']) && empty($_POST['StartDate'])){
    echo "Error: All fields are required\n";
    $error = "1";
}else{
  $user = $_POST['username'];
  $F_Name = $_POST['FirstName'];
  $L_Name = $_POST['LastName'];
  $St_Date = $_POST['StartDate'];
  $Req_Date = date("Y/m/d");
  $Req_Type = $_POST['FormID'];

  $Insert = $pdo->query("INSERT INTO  Requests SET username = '$user',  FirstName = '$F_Name', LastName = '$L_Name', ReqDate = '$Req_Date', SDate = '$St_Date', ReqType = '$Req_Type'  ");
  header("location: http://192.168.56.23/index.html"); 
}
}
if($_POST['FormID'] == "NewDevice"){
    if(empty($_POST['User']) && empty($_POST['Model'])&& empty($_POST['reason'])){
      echo "Error: All fields are required\n";
      $error = "1";
  }else{
  $user = $_POST['User'];
  $Model =  $_POST['Model'];
  $reason = $_POST['reason'];
  $Req_Date = date("Y/m/d");
  $Req_Type = $_POST['FormID'];

  $Insert = $pdo->query("INSERT INTO  Requests SET username = '$user', Model = '$Model', Reason = '$reason', ReqDate = '$Req_Date', ReqType = '$Req_Type'");
  header("location: http://192.168.56.23/index.html"); 
}
  }
if($_POST['FormID'] == "StaffLeave"){
  if(empty($_POST['FirstName']) && empty($_POST['LastName'])&& empty($_POST['username']) && empty($_POST['leavedate'])){
    echo "Error: All fields are required\n";
    $error = "1";
}else{
    $user = $_POST['username'];
    $F_Name = $_POST['FirstName'];
    $L_Name = $_POST['LastName'];
    $Lv_Date = $_POST['leavedate'];
    $Req_Date = date("Y/m/d");
    $Req_Type = $_POST['FormID'];

    $Insert = $pdo->query("INSERT INTO  Requests SET username = '$user',  FirstName = '$F_Name', LastName = '$L_Name', ReqDate = '$Req_Date', SDate = '$Lv_Date', ReqType = '$Req_Type' ");
    header("location: http://192.168.56.23/index.html"); 
}
}

}
?>