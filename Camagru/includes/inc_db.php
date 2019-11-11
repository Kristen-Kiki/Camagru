<?php

session_start();

$server_name = "localhost";
$db_username = "root";
$db_password = "wethinkcode";
$db_name = "userlogin";

try
{
    $connection = new PDO("mysql:host=$server_name;dbname=$db_name", $db_username, $db_password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";
}

catch (PDOException $e)
{
    echo "Connection Failed: " .$e->getMessage();
} 

?> 