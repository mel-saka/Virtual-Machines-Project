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
    <a href="user.php">
       User Database
    </a>
</div>
  </head>
  <body>
    <table>
      <caption>Requests</caption> 
      <tr>
       <th>Rquest ID</th> 
       <th>Subject</th>  
       <th>Date</th>
       <th>View</td>
       <th>Resolved</td>
        
</tr>
<?php
include('web-db.php');
?>
<?php
  $q = $pdo->query("SELECT * FROM Requests");
  while($row = $q->fetch()){
    $Req_Type = $row['ReqType'];
    ?>
  <tr>
    <td><?php echo $row['RequestID']; ?></td>
    <?php
     if($Req_Type == "NewDevice"){
        ?>
     <td>New Device Request for <?php echo $row['username']; ?> </td>
    <?php  
    }
    ?> 
     <?php
     if($Req_Type == "NewAccount"){
        ?>
     <td>New User Account Request for <?php echo $row['FirstName']; ?> <?php echo $row['LastName']; ?> </td>
    <?php  
    }
    ?> 
    <?php
     if($Req_Type == "StaffLeave"){
        ?>
     <td>Account Deletion request for  <?php echo $row['FirstName']; ?> <?php echo $row['LastName']; ?> </td>
    <?php  
    }
    ?> 
    <td><?php echo $row['ReqDate']; ?></td>  
    <td><a href="view.php?id=<?php echo $row['RequestID']; ?>">View</a></td>
    <td><a href="done.php?id=<?php echo $row['RequestID']; ?>">Done</a></td>
  </tr>	
<?php  
 }
 ?>

</table>
</body>
</html>