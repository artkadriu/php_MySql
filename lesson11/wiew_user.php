<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "user_menagement";

try{
    $pdo  = new PDO ("mysql:host=$server;dbname=$dbname" ,$username, $password);

    $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    //echo "Connected";
<<<<<<< HEAD


    $sql = "SELECT id,username,email,created_at FROM users";
    $stmt = $pdo-> query ($sql);
    $users = $stmt -> fetchALL (PDO::FETCH_ASSOC);


=======
>>>>>>> 4cf49c68c62a5205f6e17d1f398da1bef8770d6e
    
}catch(PDOException $e){
    echo "Error:".$e->getMessage();
}
<<<<<<< HEAD
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Usernmae</th>
      <th scope="col">email</th>
      <th scope="col">Registration Date</th>
    </tr>
  </thead>
  <tbody>
   

<?php if (!empty($users)):?>
    <?php foreach ($users as $user):?>

        <tr>
            <td><?php echo htmlspecialchars($user['id'])?></td>
            <td><?php echo htmlspecialchars($user['username'])?></td>
            <td><?php echo htmlspecialchars($user['email'])?></td>
            <td><?php echo htmlspecialchars($user['created_at'])?></td>
            </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colsapan ="4" class = "text-center">NO user found</td>
     </tr>
 <?php endif; ?>
  </tbody>
</table>
</body>
</html>
=======







?>
>>>>>>> 4cf49c68c62a5205f6e17d1f398da1bef8770d6e
