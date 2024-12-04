<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "user_menagement";

try{
    $pdo  = new PDO ("mysql:host=$server;dbname=$dbname" ,$username, $password);

    $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    //echo "Connected";
    
}catch(PDOException $e){
    echo "Error:".$e->getMessage();
}







?>