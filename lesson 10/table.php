<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
     initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>id
            </th>
            <th>username</th>
            <th>email</th>
            <th>password</th>
        </thead>
        <tbody>
            <?php
            foreach ($user as $user) {
            ?>
            <tr>
                <td><?php $user ['id']?></td>
                <td><?php $username ['username']?></td>
                <td><?php $user ['email']?></td>
                <td><?php $user ['password']?></td>
                <?php

            }
            ?>
            </tr>
        </tbody>
    </table>
    <a href="index.php">Add Users</a>
</body>
</html>