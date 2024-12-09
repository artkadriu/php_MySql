<?php
include_once("config.php");
$id=$_GET["id"];
$sql ="SELECT * FROM users WHERE id=:id";
$prep = $connect->prepare($sql);
$prep->bindParam(":Id,$id");
$prep-> execute();
$data = $prep->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method=post></form>
    <input type="text" name="" value="<?php echo $data ['id']?>"><br>
    <input type="text" name="" value="<?php echo $data ['name']?>"><br>
    <input type="text" name="" value="<?php echo $data ['username']?>"><br>
    <input type="text" name="" value="<?php echo $data ['email']?>"><br>

</body>
</html>