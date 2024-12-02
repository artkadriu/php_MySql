<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "user_menagement";

try{
    $pdo  = new PDO ("mysql:host=$server;dbname=$dbname" ,$username, $password);

    $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    //echo "Connected";

   if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $user = $_POST ['username'];
    $email = $_POST ['email'];
    $pass =$_POST ['password'];
 
    if(empty($user) || empty ($email)  || empty ($pass) ){
        echo "All fields are required!!!";
        exit;
    }
  $hashed_password = password_hash($pass,PASSWORD_BCRYPT);

  //PREPARE THE SQL STATMENT
  $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
  $stmt = $pdo -> prepare($sql);

  $stmt ->bindParam('username',$user,PDO::PARAM_STR);
  $stmt ->bindParam('email',$user,PDO::PARAM_STR);
  $stmt ->bindParam('password',$user,PDO::PARAM_STR);


if($stmt-> execute()){
    echo "Signup succesfull You can now log in";
}else{
    echo "Something went wrong try again";
}

   }

}catch(PDOException $e){
    echo "Error:".$e->getMessage();
}

?>