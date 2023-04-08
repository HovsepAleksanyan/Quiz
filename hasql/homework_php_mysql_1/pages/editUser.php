<?php
require_once '../storage/consts.php';

if ($_GET) {
    $userId = $_GET['id'];
}


$dataBase = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
$sqlReq = "SELECT * FROM `my_db`.`users` WHERE `id` = $userId";

$resUser = mysqli_query($dataBase, $sqlReq);
mysqli_close($dataBase);


$user = mysqli_fetch_assoc($resUser);
$name = $user['name'];
$surname = $user['surname'];
$profession = $user['profession'];
$gender = $user['gender'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container w-25 border mt-5 border-radius rounded border-warning shadow-lg bg-light">
        <form action="../core/editHandle.php?id=<?= $userId ?>" method="POST">
            <h2 class="text-warning text-center my-3">Edit User</h2>
            <label for="name" class="input-label mt-3">Name:</label>
            <input type="text" name="name" class="form-control border-warning" id="name" value="<?= $name ?>" />

            <label for="surname" class="input-label mt-3">Surame:</label>
            <input type="text" name="surname" class="form-control border-warning" id="surname" value="<?= $surname ?>" />

            <label for="profession" class="input-label mt-3">Profession:</label>
            <input type="text" name="profession" class="form-control border-warning" id="profession" value="<?= $profession ?>">

            <label for="gender" class="input-label mt-3">Gender:</label>
            <input type="text" name="gender" class="form-control border-warning" id="gender" value="<?= $gender ?>" />

            <input type="submit" value="Submit" class="btn btn-warning mt-3 mb-3 d-block w-50 m-auto" />
        </form>
    </div>
</body>

</html>