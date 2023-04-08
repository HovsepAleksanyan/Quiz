<?php
require_once '../storage/consts.php';

if ($_GET) {
    $userId = $_GET['id'];
}

$dataBase = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
$sqlReq = "SELECT * FROM `my_db`.`users` WHERE `id` = $userId";

$userView = mysqli_query($dataBase, $sqlReq);

mysqli_close($dataBase);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 w-50">
        <table class="table table-bordered">
            <thead class="table-danger">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>SURNAME</th>
                    <th>PROFESSION</th>
                    <th>GENDER</th>
                </tr>
            </thead>
            <tbody class="table-primary">
                <?php while ($user = mysqli_fetch_assoc($userView)) : ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['surname'] ?></td>
                        <td><?= $user['profession'] ?></td>
                        <td><?= $user['gender'] ?></td>
                    </tr>
                <? endwhile; ?>
            </tbody>
        </table>
    </div>

<a href="../index.php" class="btn btn-outline-success d-block mt-5 m-auto w-25">Home</a>

</body>

</html>