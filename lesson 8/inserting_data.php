<?php
$host = "localhost";
$db = "db";
$user = "root";
$pas = "";


try{
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $username = "Jack";
    $passwpord = password_hash("mypaswword", PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
    

 $pdo -> exec($sql);

 echo "new record created succcessfully";
} catch (PDOException $e){
    echo $e-> getMessage();
}


?>