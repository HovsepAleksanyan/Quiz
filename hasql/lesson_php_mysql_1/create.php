<?php
if ($_POST) {
    define('DB_HOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'my_db');
    define('DB_PORT', '3306');


    $db = mysqli_connect(
        DB_HOST,
        DB_USERNAME,
        DB_PASSWORD,
        DB_NAME,
        DB_PORT,
    );

    if (mysqli_connect_errno()) {
        echo "DB Connect FAIL " . mysqli_connect_error();
        exit();
    }
    $sql = "INSERT INTO `users` (`id`, `name`) VALUES (NULL, '" . $_POST['name'] . "')";
    $result = mysqli_query($db, $sql);
    if ($result) {
        //    echo (mysqli_num_rows($result));

        //    echo "<pre>";
        //    var_dump($result);
        //    echo "</pre>";
    }


    //echo "DB Connect SUCCESS!";
    mysqli_close($db);
    header('location:index.php');
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>

<body>
    <div id="form">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter Name">
            <br>
            <input type="submit" value="Save">
        </form>
    </div>
</body>

</html>