<?php
require_once 'storage/base.php';

$dataBase = mysqli_connect(
    DB_HOST,
    DB_USERNAME,
    DB_PASSWORD,
    DB_NAME,
    DB_PORT
);

$sqlReq = "CREATE TABLE `my_db`.`the_users` 
           (
           `id` INT NOT NULL AUTO_INCREMENT ,
           `name` VARCHAR(10) NOT NULL ,
           `surname` VARCHAR(15) NOT NULL ,
           `age` INT NOT NULL ,
           `gender` VARCHAR(6) NOT NULL ,
           `income` INT NOT NULL ,
           `password` VARCHAR(15) NOT NULL ,
           PRIMARY KEY (`id`)
           )
           ENGINE = InnoDB CHARSET=utf8mb3 COLLATE utf8mb3_general_ci";
$result = mysqli_query($dataBase, $sqlReq);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex flex-wrap flex-column shadow-lg rounded w-50 m-auto mt-5 pb-3 bg-light">
        <a href="core/allUsers.php" class="btn btn-outline-success d-block w-50 m-auto mt-3">Բոլոր օգտատերերը</a>
        <a href="core/minorUsers.php" class="btn btn-outline-success d-block w-50 m-auto mt-3">Անչափահաս օգտատերեր</a>
        <a href="core/pensUsers.php" class="btn btn-outline-success d-block w-50 m-auto mt-3">Թոշակառու օգտատերեր</a>
        <a href="core/unableToUsers.php" class="btn btn-outline-success d-block w-50 m-auto mt-3">Անաշխատունակ օգտատերեր</a>
        <a href="core/ableToUsers.php" class="btn btn-outline-success d-block w-50 m-auto mt-3">Աշխատունակ օգտատերեր</a>
        <a href="core/firstUsers.php" class="btn btn-outline-success d-block w-50 m-auto mt-3">Առաջին 1000 օգտատերեր (այբ․ դաս․)</a>
        <a href="core/secondUsers.php" class="btn btn-outline-success d-block w-50 m-auto mt-3">Երկրորդ 100 օգտատերեր ըստ տարիքի (նվազ․)</a>
        <a href="" class="btn btn-outline-danger d-block w-50 m-auto mt-3">Ամենաբարձր աշխատավարձ ունեցող</a>
        <a href="" class="btn btn-outline-danger d-block w-50 m-auto mt-3">Ամենացածր թոշակ ունեցող օգտատերեր</a>
        <a href="core/womenLessIncome.php" class="btn btn-outline-success d-block w-50 m-auto mt-3">Կանայք 80հազ․-ից ցածր աշխատավարձով</a>
        <a href="core/moreThanFiveTh.php" class="btn btn-outline-success d-block w-50 m-auto mt-3">Անչափահասներ 5հազ․-ից բարձր կրթաթոշակով</a>
    </div>
</body>

</html>