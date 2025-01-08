<?php
session_start();
if(!isset($_SESSION["admin_logged_in"])){
    header("location:login.php");
    exit();
}

require_once("config.php");

//fetch all users from the database 
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// check if query executed succesfully
if(!$result){
    die("Database query failed:".$conn->error);
}
?>
