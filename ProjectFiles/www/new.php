
<?php
include('web-db.php');
?>
 <link rel="stylesheet" type="text/css" href="form.css"> 

 <form action = "newadd.php" method="post" class ="form">
  <input type="hidden" id="DeviceID" name="DeviceID" value = ""><br>
  <input type="hidden" id="OgTag" name="OgTag" value = ""><br> 
  
  <label for="AssetTag" class = "lab">Asset Tag</label><br>
  <input type="Text" id="AssetTag" name="AssetTag" value = ""><br>
  
  <label for="User">User:</label><br>
  <input type="text" id="User" name="User" placeholder = " " ><br>
  <label for="Model">Model:</label><br>
  <input type="text" id="Model" name="Model" placeholder= " " ><br>
  <label for="Purchase">Purchase Date:</label><br>
  <input type="date" id="purchase" name="purchase" placeholder= " "><br>
  <label for="Status">Status:</label><br>
  <select id="Status" name="Status" value = ""><br>
    <option value="Active">Active</option>
    <option value="Unutilised">Unutilised</option>
    <option value="Damaged">Damaged</option>
    <option value="decommisioned">decommisioned</option>
    <option value="DECOM-Damaged">DECOM-Damaged</option>
</select>
  <button type="submit" name="sbt">Save</button>
</form>
</div>