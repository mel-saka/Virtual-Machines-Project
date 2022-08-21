<?php
include('web-db.php');
?>
<div>
<?php
$q = $pdo->query("SELECT * FROM papers");

while($row = $q->fetch()){
  echo "<tr><td>".$row["code"]."</td><td>".$row["name"]."</td></tr>\n";
}

?>
</div>
</body>
</html>