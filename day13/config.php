<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "another_user_menagment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
