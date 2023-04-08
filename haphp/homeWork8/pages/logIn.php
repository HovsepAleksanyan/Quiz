<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-5 mb-5 m-auto border w-25 bg-light">
        <h2 class="text-center text-success">Login form</h2>
        <form action="../core/loginHandle.php" method="POST">
            <label for="username" class="form-label w-100 mt-3">
                Username:
                <input type="text" name="username" class="form-control" id="username">
            </label>
            <label for="passWord" class="form-label w-100 mt-3">
                Password:
                <input type="password" name="password" class="form-control" id="password">
            </label>
            <input type="submit" value="Submit" class="d-block m-auto w-50 mt-3 mb-3">
        </form>
    </div>

    <?php if (isset($_SESSION['loginMessage'])) : ?>
        <div class="container w-25 mt-3 m-auto">
            <ul class="list-group">
                <?php if (isset($_SESSION['loginMessage']['username'])) : ?>
                    <li class="list-group-item text-danger">
                        <?= $_SESSION['loginMessage']['username'] ?>
                    </li>
                <?php endif; ?>

                <?php if (isset($_SESSION['loginMessage']['password'])) : ?>
                    <li class="list-group-item text-danger">
                        <?= $_SESSION['loginMessage']['password'] ?>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['loginErrors'])) : ?>
        <div class="container w-25 mt-3 m-auto">
            <ul class="list-group">
                <?php if (isset($_SESSION['loginErrors']['username'])) : ?>
                    <li class="list-group-item text-danger">
                        <?= $_SESSION['loginErrors']['username'] ?>
                    </li>
                <?php endif; ?>

                <?php if (isset($_SESSION['loginErrors']['password'])) : ?>
                    <li class="list-group-item text-danger">
                        <?= $_SESSION['loginErrors']['password'] ?>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    <?php endif; ?>
</body>

</html>
<?php
session_unset();
?>