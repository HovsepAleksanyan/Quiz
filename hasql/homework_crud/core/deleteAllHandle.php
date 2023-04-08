<?php
require_once '../config/base.php';

$dataBase = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
$sqlReq = "DELETE FROM `my_db`.`users`";

mysqli_query($dataBase, $sqlReq);

mysqli_close($dataBase);
header('location: ../');
exit();