<?php
require_once 'storage/consts.php';

$dataBase = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
// Get all users for show
$sqlReq = "SELECT * FROM `my_db`.`users`";

$resTable = mysqli_query($dataBase, $sqlReq);

mysqli_close($dataBase);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <a href="pages/addUser.php" class="btn btn-outline-primary d-block mt-3 m-auto w-25 fw-bold fs-4">Add User</a>

    <div class="container w-50 mt-5">
        <table class="table table-bordered text-center shadow-lg fs-4">
            <thead class="bg-secondary text-light">
                <tr>
                    <th class="w-25">ID</th>
                    <th class="w-50">Name</th>
                    <th>&#x270E;</th>
                    <th>&#128064;</th>
                    <th>&#x274C;</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($resTable)) : ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td>
                            <a class="btn btn-outline-warning btn-sm" href='pages/editUser.php?id=<?= $row['id'] ?>'>Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-outline-primary btn-sm" href='pages/viewUser.php?id=<?= $row['id'] ?>'>View</a>
                        </td>
                        <td>
                            <a class="btn btn-outline-danger btn-sm" href='pages/deleteUser.php?id=<?= $row['id'] ?>'>Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </div>
</body>

</html>