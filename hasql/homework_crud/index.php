<?php
require_once 'config/base.php';

$dataBase = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
$sql = "SELECT * FROM `my_db`.`users`";

$resultTable = mysqli_query($dataBase, $sql);
mysqli_close($dataBase);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <a href="pages/createUser.php" class="d-block m-auto mt-3 btn btn-outline-primary w-25 shadow">Create</a>

    <table class="table table-bordered shadow-lg text-center w-50 mt-5 m-auto fs-4">
        <thead class="table-dark">
            <tr>
                <th class="w-25">id</th>
                <th class="w-50">name</th>
                <th>&#128064;</th>
                <th>&#x270E;</th>
                <th>&#x274C;</th>
            </tr>
        </thead>
        <tbody class="table-light">
            <?php while ($rowTable = mysqli_fetch_assoc($resultTable)) : ?>
                <tr>
                    <td><?php echo $rowTable['id'] ?></td>
                    <td><?php echo $rowTable['name'] ?></td>
                    <td>
                        <a href='pages/viewUser.php?id=<?php echo $rowTable['id'] ?>' class="btn btn-success btn-sm">View</a>
                    </td>
                    <td>
                        <a href='pages/updateUser.php?id=<?php echo $rowTable['id'] ?>' class="btn btn-warning btn-sm">Update</a>
                    </td>
                    <td>
                    <a href='core/deleteHandle.php?id=<?php echo $rowTable['id'] ?>' class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
     
    <a href="core/deleteAllHandle.php" class="d-block m-auto mt-5 btn btn-outline-danger w-25 shadow">Delete all users</a>
</body>

</html>