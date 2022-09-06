
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$pdo = require_once 'web-db.php';
?>
<?php

$error = "0";

if(isset($_POST['sbt'])){
   
   
    if(empty($_POST['AssetTag']) && empty($_POST['Model'])&& empty($_POST['User'])){
        echo "Error: All fields are required: If device has no assigned user change status\n";
        $error = "1";
    }
    
    $lDID = $_POST['DeviceID'];
    $inputTag = $_POST['AssetTag'];
    $ogTag = $_POST['OgTag'];
    $T = $pdo->query("SELECT count(*) FROM Devices WHERE AssetTag = '$inputTag'");
    $Tcount = $T->fetch();
    $Tag_num = $Tcount[0];

    if($inputTag == $ogTag || $Tag_num == 0){
          $tg = $_POST['AssetTag'];
          //echo $tg;
    }else{
        echo "Error: Another Asset already has the same tagl\n";
        $error = "1";
    }
   



   
    if(!empty($_POST['Model'])){
    $mod= $_POST['Model'];
    }
    
    
    $lUser = $_POST['User'];
    //echo  $lUser;
    $U = $pdo->query("SELECT count(*) FROM Staff WHERE username = '$lUser'");
    $count = $U->fetch();
    $User_num = $count[0];
 
    if($User_num > 0){
        $U = $pdo->query("SELECT StaffID FROM Staff WHERE username = '$lUser'");
        while($row = $U->fetch()){
            $usrID= $row['StaffID'];
            }
    }else{
        echo "Error: User doesn't exist. Leave Blank if no user is required\n";
        $error = '1';
    }
    
    if($_POST['Status'] == "Unutilised" || $_POST['Status'] == "decommisioned"){
        echo "stat";
        $usrID = "1";
    }
  
    if($error == "0"){
        $stat = $_POST['Status'];
        $p_date = $_POST['purchase'];
        $Update = $pdo->query("UPDATE Devices SET Stat = '$stat',  AssetTag = '$tg', Model = '$mod', purchased_On = '$p_date' WHERE DeviceID = '$lDID'");
       $SUpdate = $pdo->query("UPDATE Devices SET StaffID = '$usrID' WHERE DeviceID = '$lDID'");
      // echo $Update;
 
      header("location: assetManager.php"); 
    }
  
}

?>

