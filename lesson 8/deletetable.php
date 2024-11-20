<?php
try {
    //Connect to the database 
    $pdo = new PDO ("mysql:host=localhost;dbname=db","root","");
    //Table alteration SQL
    $sql = "DROP TABLE users";
  
    // Execute the statment 
    $pdo -> exec ($sql);

    echo "Table dropped succesfully";
} catch (PDOException $e) {
    echo $e-> getmessage();
    
}
?>