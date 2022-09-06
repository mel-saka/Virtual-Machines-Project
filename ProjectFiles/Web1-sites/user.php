<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="table.css"> 
    <div class = "menu">
    <a href="assetManager.php">
        Assest Database
    </a>
    <a href="renewal.php">
        Assest Renewal
    </a>
    <a href="stock.php">
        New Assets Stock 
    </a>
    <a href="dash.php">
        Requests Dashboard
     </a>
</div>
  </head>
  <body>
  <a href="newUser.php">Add a User</a>
    <table>
      <caption>Assets</caption> 
      <tr>
       <th>StaffID</th> 
       <th>Username</th>  
       <th>First Name</th>
        <th>Last Name</th>
        <th>Edit</td>
        <th>Delete</td>
        
</tr>
<?php
include('web-db.php');
?>
<?php
  $q = $pdo->query("SELECT * FROM Staff WHERE NOT StaffID = '1'");
  while($row = $q->fetch()){
    ?>
  <tr>
   <td><?php echo $row['StaffID']; ?></td>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['FirstName']; ?></td>
    <td><?php echo $row['LastName']; ?></td> 
    <td><a href="update.php?id=<?php echo $row['StaffID']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $row['StaffID']; ?>">Delete</a></td>
  </tr>	
<?php  
 }
 ?>

</table>
</body>
</html>