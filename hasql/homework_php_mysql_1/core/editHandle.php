<?php
//In GET is user's `id`
if ($_POST && $_GET) {
    require_once '../storage/consts.php';

    $id = $_GET['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $profession = $_POST['profession'];
    $gender = $_POST['gender'];
    
    $dataBase = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
    $sqlReq = "UPDATE `my_db`.`users` SET `name` = '$name', `surname` = '$surname',
    `profession` = '$profession', `gender` = '$gender' WHERE `id` = $id;";
    
    //Edit
    mysqli_query($dataBase, $sqlReq);
    mysqli_close($dataBase);

    header('location: ../');
    exit();
}