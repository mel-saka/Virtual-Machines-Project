<!DOCTYPE html>
<html>
      <body>
<?php
include('web-db.php');
//This page views details of tickets in dashboard
?>
<?php
$id = $_GET['id']; 
$up = $pdo->query("SELECT * FROM Requests WHERE RequestID= '$id'");
$nRows = $pdo->query("SELECT count(*) FROM Requests WHERE RequestID= '$id'")->fetchColumn(); 


if($nRows == 1){
   
    while($row = $up->fetch()){
    $Type = $row['ReqType'];
    if($Type  == "NewAccount"){
        $user = $row['username'];
        $F_Name = $row['FirstName'];
        $L_Name = $row['LastName'];
        $St_Date = $row['SDate'];
        $Req_Date = $row['ReqDate'];
        
      
      }
      if($Type  == "NewDevice"){
        $user = $row['username'];
        $Model =  $row['Model'];
        $reason = $row['Reason'];
        $Req_Date = $row['ReqDate'];
       
      }
      if($Type == "StaffLeave"){
          $user = $row['username'];
          $F_Name = $row['FirstName'];
          $L_Name = $row['LastName'];
          $Lv_Date = $row['SDate'];
          $Req_Date = $row['ReqDate'];
         }

}
}
?>
<?php
  if($Type  == "NewAccount"){
?>

 <link rel="stylesheet" type="text/css" href="form.css"> 
<form>

  <label for="username">User:</label><br>
  <input type="text" id="username" name="username" value =  "<?php echo $user; ?>" readonly><br>
  <label for="FirstName">First Name:</label><br>
  <input type="text" id="FirstName" name="FirstName" value =  "<?php echo $F_Name; ?>" readonly><br>
  <label for="LastName">Last Name:</label><br>
  <input type="text" id="LastName" name="LastName" value =  "<?php echo $L_Name; ?>" readonly><br>
  <label for="StartDate">Start Date:</label><br>
  <input type="date" id="StartDate" name="StartDate" value =  "<?php echo $St_Date; ?>" readonly><br>
</form>
<?php
  }
?>

<?php
  if($Type  == "NewDevice"){
?>

<link rel="stylesheet" type="text/css" href="form.css"> 

 <form>
  <label for="User">User:</label><br>
  <input type="text" id="User" name="User" value =  "<?php echo $user; ?>" readonly><br>
  <label for="Model">Model:</label><br>
  <input type="text" id="Model" name="Model" value =  "<?php echo $Model; ?>" readonly><br>
  <label for="Reason">Reason for new device:</label><br>
  <input type="text" id="reason" name="reason" value =  "<?php echo $reason; ?>" readonly><br>
</form>
<?php
  }
?>

<?php
  if($Type  == "StaffLeave"){
?>

<link rel="stylesheet" type="text/css" href="form.css"> 

<form>
 <label for="username">User:</label><br>
 <input type="text" id="username" name="username" value =  "<?php echo $user; ?>" readonly ><br>
 <label for="FirstName">First Name:</label><br>
 <input type="text" id="FirstName" name="FirstName" value =  "<?php echo   $F_Name; ?>" readonly ><br>
 <label for="LastName">Last Name:</label><br>
 <input type="text" id="LastName" name="LastName" value =  "<?php echo $L_Name; ?>" readonly><br>
 <label for="leavedate">Leaving Date:</label><br>
 <input type="date" id="leavedate" name="leavedate" value =  "<?php echo  $Lv_Date; ?>" readonly><br>
</form>
<?php
  }
?>
</body>
</html>