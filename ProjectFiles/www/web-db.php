<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$servername = "localhost";
$database = "test-db";
$username = "root";
$password = "pass";


try {

   $dsn = "mysql:host=$servername;dbname=$database";

    $pdo = new PDO($dsn, $username, $password);
    
    //$q = $pdo->query("SELECT * FROM Staff");

    
    //$q = $pdo->query("SELECT * FROM Staff");
   // $q = $pdo->query("SELECT * FROM Devices WHERE purchased_On < DATE_SUB(NOW(),INTERVAL 3 YEAR)");

    //while($row = $q->fetch()){
     //   echo "<tr><td>".$row["StaffID"]."</td><td>".$row["username"]."</td></tr>\n";
    //  }
      

     // while($row = $q->fetch()){
      //  echo "<tr><td>".$row["device"]."</td><td>".$row["purchased_On"]."</td></tr>\n";
  //   }
    

    //echo "Connectionyea boi Ottkay";

    return $pdo;
}
    
    
    catch (PDOException $e)
    
    {
    echo "Connection failed: ". $e->getMessage();
    }

?>