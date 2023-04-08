<?php
require_once '../config/base.php';

if ($_GET) {
    $userId = $_GET['id'];
}

$dataBase = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
$sqlReq = "SELECT * FROM `my_db`.`users` WHERE `id` = $userId";

//get user
$userData = mysqli_query($dataBase, $sqlReq);
mysqli_close($dataBase);

$userData =  mysqli_fetch_assoc($userData);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="card border- mt-5 m-auto fs-5 p-3 shadow-lg w-25">
        <?php foreach ($userData as $key => $value) : ?>
            <p>
                <span class="fw-bolder">
                    <?php echo $key . ": " ?>
                </span>
                <?php echo $value ?>
            </p>
        <?php endforeach; ?>
    </div>
    <a href="../index.php" class="btn btn-outline-success d-block w-25 mt-5 m-auto shadow-lg">Home</a>
</body>

</html>