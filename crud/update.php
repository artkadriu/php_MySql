
<?php
include_once ('config.php');

//isset

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $emai = $_POST['email'];
    $password = $_POST['password'];

    $sql = 'INSERT INTO users username=username,name=:name, email=:email WHERE ;

    $sqlQuery = $conect -> prepare($sql);
    $sqlQuery -> bindParam(':id',$username);
    $sqlQuery -> bindParam(':name',$username);
    $sqlQuery -> bindParam(':username',$email);
    $sqlQuery -> bindParam(':email',$password);

    $sqlQuery-> execute();
    echo "The user was added succesfully";
}
