<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-5 d-flex justify-content-around">
        <div class="border p-3 m-2 bg-light" id="signUpBtn">
            <a href="pages/register.php" class="text-success text-decoration-none fw-bold fs-3">Sign up</a>
        </div>
        <div class="border p-3 m-2 bg-light" id="logInBtn">
            <a href="pages/login.php" class="text-success text-decoration-none fw-bold fs-3">Login</a>
        </div>
    </div>

    <div class="container mt-3 m-auto w-25">
        <div class="border w-50 m-auto mt-3 text-center" id="viewBtn">
            <a href="pages/usersView.php" class="text-decoration-none text-primary fw-bold fs-3">View Users</a>
        </div>
    </div>

    <?php if (isset($_SESSION['regUser'])) : ?>
        <div class="alert alert-success w-50 mt-5 m-auto">
            Signed up
            <strong>
                <?= $_SESSION['regUser']['name'] . " " . $_SESSION['regUser']['surname'] ?>
            </strong>
        </div>
    <?php endif; ?>

    <script src="assets/js/script.js"></script>
</body>

</html>
<?php
session_unset();
?>