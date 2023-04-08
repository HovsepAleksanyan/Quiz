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
    <div class="container mt-5 border border-success rounded w-25 shadow-lg">
        <form action="../core/loginHandle.php" method="POST">
            <h2 class="text-center text-success mt-3 mb-3">Log in</h2>
            <label for="username" class="form-label mt-3" name="username">Username:</label>
            <input type="text" name="username" class="form-control bg-light" id="username" <?php if (isset($_SESSION['oldData']['username'])) : ?> value="<?= $_SESSION['oldData']['username'] ?>" <?php endif; ?> />

            <label for="password" class="form-label mt-3" name="password">Password:</label>
            <input type="password" name="password" class="form-control bg-light" id="password" />
            <input type="submit" value="Submit" class="d-block m-auto w-50 mt-5 mb-3 border border-secondary text-success fw-bold bg-light">
        </form>
    </div>

    <?php if (isset($_SESSION['errorMessage'])) : ?>
        <div class="alert alert-danger w-25 mt-5 m-auto text-center">
            <strong>
                <?= $_SESSION['errorMessage'] ?>
            </strong>
        </div>
    <?php endif; ?>

</body>

</html>

<?php
session_unset();
?>