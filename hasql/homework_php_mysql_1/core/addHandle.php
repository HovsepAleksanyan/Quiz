<?php
if ($_POST) {
    require_once "../storage/consts.php";

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $profession = $_POST['profession'];
    $gender = $_POST['gender'];

    $dataBase = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
    $sqlReq = "INSERT INTO `my_db`.`users` (`id`, `name`, `surname`, `profession`, `gender`) 
    VALUES (NULL, '$name', '$surname', '$profession', '$gender') ";
    
    //Add
    mysqli_query($dataBase, $sqlReq);
    mysqli_close($dataBase);

    header('location: ../');
    exit();
}
