<?php
include_once ('config.php');

//isset

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $emai = $_POST['email'];
    $password = $_POST['password'];

    $sql = 'INSERT INTO users (username,email,password) VALUES (:username,:emai,:password)';

    $sqlQuery = $conect -> prepare($sql);

    $sqlQuery -> bindParam('username',$username);
    $sqlQuery -> bindParam('email',$email);
    $sqlQuery -> bindParam('password',$password);

    $sqlQuery-> execute();
    echo "The user was added succesfully";
}
