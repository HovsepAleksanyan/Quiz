<?php
require_once '../storage/base.php';

$dataBase = mysqli_connect(
    DB_HOST,
    DB_USERNAME,
    DB_PASSWORD,
    DB_NAME,
    DB_PORT
);

$sqlReq = "SELECT * FROM `my_db`.`the_users` ORDER BY `name`, `surname` LIMIT 4";
$result = mysqli_query($dataBase, $sqlReq);

$usersTable = mysqli_fetch_all($result);

mysqli_close($dataBase);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 class="alert alert-success container mt-3 mb-5 text-center shadow">
        Առաջին 1000 օգտատերերը (Այբ․ դաս․)
    </h1>
    <table class="table container">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Income</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersTable as $user) : ?>
                <tr>
                    <?php foreach ($user as $data) : ?>
                        <td>
                            <?php echo $data; ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>" class="btn btn-outline-primary d-block w-25 m-auto mt-5">Go Home</a>

</body>

</html>