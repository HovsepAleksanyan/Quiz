<?php
require '../lib/file_action.php';
require '../config/base.php';
$fileName = $_SERVER['DOCUMENT_ROOT'] . '/' . 'homework10' . '/' . 'storage' . '/' . FILE_NAME; //

$users = getAllUsers($fileName);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <?php if (isset($users)) : ?>
        <div class="container">
            <table class="table table-bordered table-hover mt-5">
                <thead class="table-secondary">
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Reply password</th>
                    </tr>
                </thead>
                <tbody class="table-success">
                    <tr>
                        <?php for ($i = 0; $i < count($users) - 1; $i++) : ?>
                    <tr>
                        <?php foreach ($users[$i] as $val) : ?>
                            <td><?= $val ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endfor; ?>
                </tr>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</body>

</html>