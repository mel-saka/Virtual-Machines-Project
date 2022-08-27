
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$pdo = require_once 'web-db.php';
?>
<?php

$error = "0";

if(isset($_POST['sbt'])){
    if(empty($_POST['DeviceID']) && empty($_POST['Model'])){
        echo "Error: Entry is required for Asset ID and Model\n";
        $error = "1";
    }
    if(!empty($_POST['Model'])){
    
    $mod= $_POST['Model'];
    }
    $lUser = $_POST['User'];
    echo  $lUser;
    $U = $pdo->query("SELECT count(*) FROM Staff WHERE username = '$lUser'");
    $count = $U->fetch();
    $User_num = $count[0];
    //$User_num = $pdo->query("SELECT EXISTS (SELECT username FROM Staff WHERE username = '$lUser') as OUTPUT");

    if($User_num > 0){
        $usr = $_POST['User'];
    }else if($User_num == 0 && empty($_POST['User']) ){
        $Usr = "Unassigned";
    }else{
        echo "Error: User doesn't exist. Leave Blank if no user is required\n";
        $error = '1';
    }
    $lDID = $_POST['DeviceID'];
    $D =  $pdo->query("SELECT count(*)  FROM Devices WHERE DeviceID = '$lDID'");
    $Dcount = $D->fetch();
    $Did_num  = $Dcount[0];
    //echo $Dcount;
    /*f($Did_num == 0){
        $D_ID  = $_POST['DeviceID'];
        echo $D_ID;
    }else{
        echo "Error: A device already has the same ID Tag\n";
        $error = "0";
    }*/
    if($error == "0"){
        echo "nice";
        $p_date = $_POST['purchase'];
        $userID = "SELECT StaffID FROM Staff WHERE username = '$usr'";
        //echo $userID;
       echo $lDID;
     $Update = $pdo->query("UPDATE Devices SET Model = '$mod', purchased_On = '$p_date' WHERE DeviceID = '$lDID'");
       //echo $Update;
       //$sql = "UPDATE  Devices SET  StaffID = :StaffID, Model= :Model, purchased_On= :purchased_On WHERE DeviceID = :id LIMIT 1";
       // echo $sql;      
      // $sql_run = $pdo->prepare($sql);
      // $Devices = [
        //':DeviceID' => $D_ID,
      //  ':StaffID' => $userID,
       // ':Model'=> $mod,
      //  ':purchased_On' => $p_date,
       // ':id' => $lDID
    //];
       //$sqlEXec = $sql_run->execute($Devices);
       echo "TEST";
       //$sql_run->bindParam(':DeviceID', $Devices['DeviceID'], PDO::PARAM_INT);
       //$sql_run->bindParam(':StaffID', $Devices['StaffID'], PDO::PARAM_INT);
       //$sql_run->bindParam(':Model', $Devices['Model'], PDO::PARAM_INT);
       //$sql_run->bindParam(':purchased_On', $Devices['purchased_On'], PDO::PARAM_INT);
      
       //$sql_Ex = $sql_run->execute(array(":did"=>$D_ID, ":sid"=>$userID, ":mod"=>$mod, ":pdate"=>$p_date));
       header("location: assetManager.php"); 
    }
  
}

?>

