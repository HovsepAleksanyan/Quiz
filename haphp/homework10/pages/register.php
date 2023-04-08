<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<div class="container mt-5 border border-primary rounded w-25 shadow-lg">
    <h2 class="text-center text-primary mt-3 mb-3">Registration form</h2>

    <form action="../core/registerHandle.php" method="POST">

        <label for="name" class="form-label w-100 mt-3 <?php if (isset($_SESSION['regErrors']['name'])) echo "text-danger"; ?>">
            <?php if (isset($_SESSION['regErrors']['name'])) : ?>
                <?= $_SESSION['regErrors']['name'] ?>
            <?php else : ?>
                Name:
            <?php endif; ?>
        </label>
        <input type="text" name="name" class="form-control bg-light" id="name"
        <?php if(isset($_SESSION['oldData']['name'])): ?>
            value="<?= $_SESSION['oldData']['name'] ?>"
        <?php endif; ?>
        />


        <label for="surname" class="form-label w-100 mt-3 <?php if (isset($_SESSION['regErrors']['surname'])) echo "text-danger"; ?>">
            <?php if (isset($_SESSION['regErrors']['surname'])) : ?>
                <?= $_SESSION['regErrors']['surname'] ?>
            <?php else : ?>
                Surname:
            <?php endif; ?>
        </label>
        <input type="text" name="surname" class="form-control bg-light" id="surname" 
        <?php if(isset($_SESSION['oldData']['surname'])): ?>
            value="<?= $_SESSION['oldData']['surname'] ?>"
        <?php endif; ?>/>


        <label for="username" class="form-label w-100 mt-3 <?php if (isset($_SESSION['regErrors']['username'])) echo "text-danger"; ?>">
            <?php if (isset($_SESSION['regErrors']['username'])) : ?>
                <?= $_SESSION['regErrors']['username'] ?>
            <?php else : ?>
                Username:
            <?php endif; ?>
        </label>
        <input type="text" name="username" class="form-control bg-light" id="username" 
        <?php if(isset($_SESSION['oldData']['username'])): ?>
            value="<?= $_SESSION['oldData']['username'] ?>"
        <?php endif; ?>/>


        <label for="password" class="form-label w-100 mt-3 <?php if (isset($_SESSION['regErrors']['password'])) echo "text-danger" ?>">
            <?php if (isset($_SESSION['regErrors']['password'])) : ?>
                <?= $_SESSION['regErrors']['password'] ?>
            <?php else : ?>
                Password:
            <?php endif; ?>
        </label>
        <input type="password" name="password" class="form-control bg-light" id="password" />


        <label for="re_password" class="form-label w-100 mt-3 <?php if (isset($_SESSION['regErrors']['re_password'])) echo "text-danger" ?>">
            <?php if (isset($_SESSION['regErrors']['re_password'])) : ?>
                <?= $_SESSION['regErrors']['re_password'] ?>
            <?php else : ?>
                Reply password:
            <?php endif; ?>
        </label>
        <input type="password" name="re_password" class="form-control bg-light" id="re_password" />
        <input type="submit" value="Submit" class="d-block m-auto w-50 mt-5 mb-3 border border-secondary text-primary fw-bold bg-light">

    </form>

</div>

</body>

</html>
<?php
session_unset();
?>