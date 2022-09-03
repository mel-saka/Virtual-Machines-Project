 <link rel="stylesheet" type="text/css" href="form.css"> 

 <link rel="stylesheet" type="text/css" href="form.css"> 
<form action = "http://192.168.56.22/dashboard.php" method="post">

  <input type="hidden" id="FormID" name="FormID" value = "NewAccount"><br>   
  <label for="Username">User:</label><br>
  <input type="text" id="User" name="User" value = "" ><br>
  <label for="FirstName">First Name:</label><br>
  <input type="text" id="FirstName" name="FirstName" value = "" ><br>
  <label for="LastName">Last Name:</label><br>
  <input type="text" id="LastName" name="LastName" value = ""><br>
  <label for="Purchase">Start Date:</label><br>
  <input type="date" id="StartDate" name="StarDate" value = ""><br>

  <button type="submit" name="sbt">Save</button>
</form>