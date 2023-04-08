<?php
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
$sql = "SELECT * FROM `users`";
$result = mysqli_query($db, $sql);
if ($result) {
    //    echo (mysqli_num_rows($result));

    //    echo "<pre>";
    //    var_dump($result);
    //    echo "</pre>";
}


//echo "DB Connect SUCCESS!";
mysqli_close($db);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: cornflowerblue;
        }

        #table {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table {
            border-collapse: collapse;
            background-color: teal;
        }

        table,
        tr,
        td,
        th {
            border: 1px solid #333333;
            padding: 5px;
            text-align: center;
            color: #d5d5d5;
        }

        #links {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 25px;
        }

        #links>a {
            text-decoration: none;
            border: 1px solid blue;
            padding: 5px 15px;
            background-color: blueviolet;
            color: #d4d4d4;
            border-radius: 5px;
            max-width: 150px;
            text-align: center;
        }

        #links>a:hover {
            text-shadow: 2px 2px 6px #333333;
            background-color: cadetblue;
        }
    </style>
</head>

<body>
    <div id="links">
        <a href="create.php">ADD USER</a>
    </div>
    <div id="table">
        <table>
            <caption>USERS</caption>
            <tr>
                <th>ID</th>
                <th>NAME</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>