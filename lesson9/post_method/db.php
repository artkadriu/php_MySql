<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "another_db";

try{
    $connect = new PDO ("mysql:host=$sever;dbname=$dbname" $userame, $password)
}

catch (PDOException $e) {
    echo "Something went wrong!!";
}



?>