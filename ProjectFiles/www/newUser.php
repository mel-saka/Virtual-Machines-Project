
<?php
include('web-db.php');
?>
 <link rel="stylesheet" type="text/css" href="form.css"> 

 <link rel="stylesheet" type="text/css" href="form.css"> 
<form action = "newAddUser.php" method="post">

  <input type="hidden" id="StaffID" name="StaffID" value = ""><br>   
  <label for="User">User:</label><br>
  <input type="text" id="User" name="User" value = "" ><br>
  <label for="FirstName">First Name:</label><br>
  <input type="text" id="FirstName" name="FirstName" value = "" ><br>
  <label for="LastName">Last Name:</label><br>
  <input type="text" id="LastName" name="LastName" value = ""><br>
  <button type="submit" name="sbt">Save</button>
</form>