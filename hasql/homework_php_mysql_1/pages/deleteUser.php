<?php
require_once '../storage/consts.php';
$dataBase = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

if ($_GET) {
    $id = $_GET['id'];
}

// Delete user
$sqlReq = "DELETE FROM `my_db`.`users` WHERE `id` = $id";
mysqli_query($dataBase, $sqlReq);


// Get all ids
$getIds = "SELECT `id` FROM `my_db`.`users`";

$idCollection = mysqli_query($dataBase, $getIds);

// Push ids in array
$i = 0;
$arr = [];
while ($row = mysqli_fetch_assoc($idCollection)) {

    $arr[$i] = $row['id'];

    $i++;
}

if (count($arr) > 0) {
    $changeIncr = max($arr) + 1;
} else {
    $changeIncr = 1;
}

// Change Auto Increment
$autoIncr = "ALTER TABLE `my_db`.`users` AUTO_INCREMENT = $changeIncr";
mysqli_query($dataBase, $autoIncr);

mysqli_close($dataBase);

header('location: ../');
exit();