<?php
include('web-db.php');
?>
 <link rel="stylesheet" type="text/css" href="form.css"> 

 <form action = "http://192.168.56.22/dashboard.php" method="post" class ="form">
 <input type="hidden" id="FormID" name="FormID" value = "NewDevice"><br> 
  <label for="User">User:</label><br>
  <input type="text" id="User" name="User" placeholder = " " ><br>
  <label for="Model">Model:</label><br>
  <input type="text" id="Model" name="Model" placeholder= " " ><br>
  <label for="Reason">Reason for new device:</label><br>
  <input type="text" id="reason" name="reason" placeholder= " " ><br>
  <button type="submit" name="sbt">Save</button>
</form>
</div>