
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$pdo = require_once 'web-db.php';
?>
<?php

$error = "0";

if(isset($_POST['sbt'])){
    $repTAG = $_POST['Replace'];
    $lDID = $_POST['DeviceID'];
    $tg = $_POST['AssetTag'];
    $mod= $_POST['Model'];

    
    $lUser = $_POST['User'];
    //echo  $lUser;
    $U = $pdo->query("SELECT count(*) FROM Staff WHERE username = '$lUser'");
    $count = $U->fetch();
    $User_num = $count[0];
    $U = $pdo->query("SELECT StaffID FROM Staff WHERE username = '$lUser'");
        while($row = $U->fetch()){
            $usrID= $row['StaffID'];
        }
        $stat = $_POST['Status'];
        $p_date = $_POST['purchase'];
  if($repTAG != "None"){
        $repl = $pdo->query("UPDATE Devices SET StaffID = ' $usrID', Stat = 'Active' WHERE AssetTag = '$repTAG'");

        if($stat == "Damaged"){
        $SUpdate = $pdo->query("UPDATE Devices SET StaffID = '1', Stat = 'DECOM-Damaged' WHERE DeviceID = '$lDID'");
    }else{
        $SUpdate = $pdo->query("UPDATE Devices SET StaffID = '1', Stat = 'decommisioned' WHERE DeviceID = '$lDID'");
    }
   
     
      // echo $Update;
 
      header('Location: ' . $_SERVER['HTTP_REFERER']); 
}else{
    echo "Error: No Replacement Asset was Selected";
}
  
}