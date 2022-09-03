
<?php
include('web-db.php');
?>
<?php
$id = $_GET['id']; // get id through query string

$up = $pdo->query("SELECT * FROM Staff WHERE StaffID = '$id'");
$nRows = $pdo->query("SELECT count(*) FROM Staff WHERE StaffID = '$id'")->fetchColumn(); 
if($nRows == 1){
    while($row = $up->fetch()){
    $usr = $row['username'];
    $S_ID = $row['StaffID'];
    $F_name= $row['FirstName'];
    $L_name= $row['LastName'];
    }
}
?>
 <link rel="stylesheet" type="text/css" href="form.css"> 
<form action = "addUser.php" method="post">

  <input type="hidden" id="StaffID" name="StaffID" value = "<?php echo $S_ID; ?>"><br>   
  <label for="User">User:</label><br>
  <input type="text" id="User" name="User" value = "<?php echo $usr; ?>" ><br>
  <label for="FirstName">First Name:</label><br>
  <input type="text" id="FirstName" name="FirstName" value = "<?php echo $F_name; ?>" ><br>
  <label for="LastName">Last Name:</label><br>
  <input type="text" id="LastName" name="LastName" value = "<?php echo $L_name; ?>"><br>
  <button type="submit" name="sbt">Save</button>
</form>