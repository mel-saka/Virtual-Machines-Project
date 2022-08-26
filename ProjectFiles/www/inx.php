<html>
  <body>
    <table>
      <caption>Due To Replace</caption> 
      <tr>
        <th>Device ID</th>
        <th>Model</th>
        <th>Purchase date</th>
</tr>
<?php
include('web-db.php');
?>
<div>
<?php
  $q = $pdo->query("SELECT * FROM Devices WHERE purchased_On < DATE_SUB(NOW(),INTERVAL 3 YEAR)");
  while($row = $q->fetch()){
    echo "<tr><td>".$row["DeviceID"]. "</td><td>".$row["Model"]. "</td><td>".$row["purchased_On"]."</td></tr>\n";
 }
//  echo "<tr><td>".$row["device"]."</td><td>".$row["purchased_On"]."</td></tr>\n";
?>

</div>
</table>
<table>
      <caption>Upcoming Replacements for the next Month</caption> 
      <tr>
        <th>Device ID</th>
        <th>Model</th>
        <th>Purchase date</th>
</tr>
<?php
include('web-db.php');
?>
<div>
<?php
  $q = $pdo->query("SELECT * FROM Devices WHERE purchased_On > DATE_SUB(NOW(),INTERVAL 36 MONTH) AND purchased_On < DATE_SUB(NOW(),INTERVAL 35 MONTH) ") ;
  while($row = $q->fetch()){
    echo "<tr><td>".$row["DeviceID"]. "</td><td>".$row["Model"]. "</td><td>".$row["purchased_On"]."</td></tr>\n";
 }
//  echo "<tr><td>".$row["device"]."</td><td>".$row["purchased_On"]."</td></tr>\n";
?>

</div>
</table>
</body>
</html>