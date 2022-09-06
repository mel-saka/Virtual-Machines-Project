<?php
//This page connects the website to the databse to the webserver
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$servername = "192.168.56.24";
$database = "db";
$username = "adminUser";
$password = "pass";


try {

   $dsn = "mysql:host=$servername;dbname=$database";

    $pdo = new PDO($dsn, $username, $password);

    return $pdo;
}
    
    
    catch (PDOException $e)
    
    {
    echo "Connection failed: ". $e->getMessage();
    }

?>