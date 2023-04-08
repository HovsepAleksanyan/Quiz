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

<div class="container mt-3 mb-5 m-auto border w-50 bg-light">
    <h2 class="text-center text-primary">Registration form</h2>
    <form action="../core/registerHandle.php" method="POST">
        <label for="name" class="form-label w-100 mt-3">
            Name:
            <input type="text" name="name" class="form-control" id="name"
            <?php if(isset($_SESSION['dataOld'])): ?>
                value="<?= $_SESSION['dataOld']['name'] ?>"
            <?php endif; ?>
            >
        </label>
        <label for="surname" class="form-label w-100 mt-3">
            Surname:
            <input type="text" name="surname" class="form-control" id="surname"
            <?php if(isset($_SESSION['dataOld'])): ?>
                value="<?= $_SESSION['dataOld']['surname'] ?>"
            <?php endif; ?>
            >
        </label>
        <label for="username" class="form-label w-100 mt-3">
            Username:
            <input type="text" name="username" class="form-control" id="username"
            <?php if(isset($_SESSION['dataOld'])): ?>
                value="<?= $_SESSION['dataOld']['username'] ?>"
            <?php endif; ?>
            >
        </label>
        <label for="email" class="form-label w-100 mt-3">
            Email:
            <input type="email" name="email" class="form-control" id="email"
            <?php if(isset($_SESSION['dataOld'])): ?>
                value="<?= $_SESSION['dataOld']['email'] ?>"
            <?php endif; ?>
            >
        </label>
        <label for="password" class="form-label w-100 mt-3">
            Password:
            <input type="password" name="password" class="form-control" id="password">
        </label>
        <input type="submit" value="Submit" class="d-block m-auto w-50 mt-3 mb-3">
    </form>
</div>

<?php if (isset($_SESSION['errors'])) : ?>

    <div class="container w-25">
        <ul class="list-group">
            <?php if (isset($_SESSION['errors']['name'])) : ?>
                <li class="list-group-item text-danger">
                    <?= $_SESSION['errors']['name'] ?>
                </li>
            <?php endif; ?>
            <?php if (isset($_SESSION['errors']['surname'])) : ?>
                <li class="list-group-item text-danger">
                    <?= $_SESSION['errors']['surname'] ?>
                </li>
            <?php endif; ?>
            <?php if (isset($_SESSION['errors']['username'])) : ?>
                <li class="list-group-item text-danger">
                    <?= $_SESSION['errors']['username'] ?>
                </li>
            <?php endif; ?>
            <?php if (isset($_SESSION['errors']['email'])) : ?>
                <li class="list-group-item text-danger">
                    <?= $_SESSION['errors']['email'] ?>
                </li>
            <?php endif; ?>
            <?php if (isset($_SESSION['errors']['password'])) : ?>
                <li class="list-group-item text-danger">
                    <?= $_SESSION['errors']['password'] ?>
                </li>
            <?php endif; ?>
        </ul>
    </div>

<?php endif; ?>

</body>

</html>

