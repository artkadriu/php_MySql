<?php
try {
    //Connect to the database 
    $pdo = new PDO ("mysql:host=localhost;dbname=db","root","");
    //Table alteration SQL
    $sql = "ALTER TABLE users ADD email VARCHAR (255)";
  
    // Execute the statment 
    $pdo -> exec ($sql);

    echo "Colum created succesfully";
} catch (PDOException $e) {
    echo "Error creating colum: ".$e-> getmessage();
    
}
?>