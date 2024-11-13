<?php 

//creating a table using PDO

$host = "localhost";
$db = "db";
$user = 'root';
$pass = '';

try {
    $pdo = new Pdo ("mysql:host=$host; dbname=$db", $super,$pass);
    $sql = "CREATE TABLE user (id INT (6) Not Null Auto_Increment primary Key,
    username Varchar (20) NOT NULL,
    password VARCHAR(20) NOT NULL)";

    $Pdo -> exec ($sql);
    
    echo "Table created succesfully";
}catch(exeption $e){


    echo "Error while creating the table".$e.getMessage();

}

?>