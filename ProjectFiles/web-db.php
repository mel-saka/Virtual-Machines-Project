<?php

$servername = "localhost";
$database = "test-db";
$username = "root";
$password = "pass";


try {

   $dsn = "mysql:host=$servername;dbname=$database";

    $pdo = new PDO($dsn, $username, $password);
    
    
    echo "Connection Ottkay";

    return $pdo;
}
    
    
    catch (PDOException $e)
    
    {
    echo "Connection failed: ". $e->getMessage();
    }

?>