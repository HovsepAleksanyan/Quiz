<?php
session_start();

require_once '../config/base.php';

if ($_GET) {
    $userId = $_GET['id'];
}

//Get values of user by id
$dataBase = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
$sqlReq = "SELECT * FROM `my_db`.`users` WHERE `id` = $userId";

$user = mysqli_query($dataBase, $sqlReq);
$user = mysqli_fetch_assoc($user);

$name = $user['name'];
$surname = $user['surname'];
$bday = $user['bday'];
$email = $user['email'];
$username = $user['username'];

mysqli_close($dataBase);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container w-25 border rounded mt-3 border-warning bg-light shadow-lg">

        <h2 class="text-center mt-3 mb-3 text-warning">Update User</h2>

        <form action='../core/updateHandle.php?id=<?php echo $userId ?>' method="POST">
            <label for="name" class="input-label mt-3 <?php if (isset($_SESSION['errors']['name'])) echo 'text-danger' ?>">
                <?php if (isset($_SESSION['errors']['name'])) : ?>
                    <?php echo $_SESSION['errors']['name'] ?>
                <?php else : ?>
                    Name:
                <?php endif; ?>
            </label>
            <input type="text" name="name" class="form-control bg-light bg-light, bg-light bg-light bg-light bg-light bg-light bg-light bg-light" id="name" value="<?php echo $name ?>" />

            <label for="surname" class="input-label mt-3 <?php if (isset($_SESSION['errors']['surname'])) echo 'text-danger' ?>">
                <?php if (isset($_SESSION['errors']['surname'])) : ?>
                    <?php echo $_SESSION['errors']['surname'] ?>
                <?php else : ?>
                    Surname:
                <?php endif; ?>
            </label>
            <input type="text" name="surname" class="form-control bg-light bg-light, bg-light bg-light bg-light bg-light bg-light bg-light bg-light" id="surname" value="<?php echo $surname ?>" />

            <label for="bday" class="input-label mt-3 <?php if (isset($_SESSION['errors']['bday'])) echo 'text-danger' ?>">
                <?php if (isset($_SESSION['errors']['bday'])) : ?>
                    <?php echo $_SESSION['errors']['bday'] ?>
                <?php else : ?>
                    Birthday:
                <?php endif; ?>
            </label>
            <input type="date" name="bday" class="form-control bg-light bg-light, bg-light, bg-light bg-light bg-light bg-light bg-light bg-light" id="bday" value="<?php echo $bday ?>" />

            <label for="email" class="input-label mt-3 <?php if (isset($_SESSION['errors']['email'])) echo 'text-danger' ?>">
                <?php if (isset($_SESSION['errors']['email'])) : ?>
                    <?php echo $_SESSION['errors']['email'] ?>
                <?php else : ?>
                    Email:
                <?php endif; ?>
            </label>
            <input type="email" name="email" class="form-control bg-light bg-light, bg-light, bg-light bg-light bg-light bg-light bg-light bg-light" id="email" value="<?php echo $email ?>" />

            <label for="username" class="input-label mt-3 <?php if (isset($_SESSION['errors']['username'])) echo 'text-danger' ?>">
                <?php if (isset($_SESSION['errors']['username'])) : ?>
                    <?php echo $_SESSION['errors']['username'] ?>
                <?php else : ?>
                    Username:
                <?php endif; ?>
            </label>
            <input type="username" name="username" class="form-control bg-light bg-light, bg-light, bg-light bg-light bg-light bg-light bg-light bg-light" id="username" value="<?php echo $username ?>" readonly />

            <label for="password" class="input-label mt-3 <?php if (isset($_SESSION['errors']['password'])) echo 'text-danger' ?>">
                <?php if (isset($_SESSION['errors']['password'])) : ?>
                    <?php echo $_SESSION['errors']['password'] ?>
                <?php else : ?>
                    Password:
                <?php endif; ?>
            </label>
            <input type="password" name="password" class="form-control bg-light bg-light, bg-light, bg-light bg-light bg-light bg-light bg-light bg-light" id="password" />

            <input type="submit" value="Update" class="btn btn-warning d-block w-50 m-auto mt-3 mb-3" />

        </form>
    </div>

    <a href="../index.php" class="btn btn-outline-success d-block w-25 mt-5 m-auto shadow-lg">Home</a>

</body>

</html>
<?php
session_unset();
?>