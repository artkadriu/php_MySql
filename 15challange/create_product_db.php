<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "products_management"; 

  Create connection
$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists.<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->select_db($dbname);

 // Create table if not exists
$table_sql = "CREATE TABLE IF NOT EXISTS products (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT NOT NULL,
    stock INT(11) NOT NULL
)";

if ($conn->query($table_sql) === TRUE) {
    echo "Table 'products' created successfully or already exists.<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
