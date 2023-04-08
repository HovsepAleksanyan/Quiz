<?php
session_start();
if(!isset($_SESSION['redirected']) || !$_SESSION['redirected']){
    session_unset();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <form action="reg.php" method="post">
        <br><br><label for="email" style="display: block">Name</label>
        <input type="text" name="name" id="email" placeholder="Enter Name"
        <?php if($_SESSION && isset($_SESSION['old']['name'])) : ?>
            value="<?= $_SESSION['old']['name']?>"
        <?php endif;?>
        >
        <?php if($_SESSION && isset($_SESSION['errors']['name'])) : ?>
        <span style="color:red;"><?= $_SESSION['errors']['name']?></span>
        <?php endif;?>
        <br><br><label for="email" style="display: block">Email</label>
        <input type="text" name="email" id="email" placeholder="Enter email">
        <?php if($_SESSION && isset($_SESSION['errors']['email'])) : ?>
            <span style="color:red;"><?= $_SESSION['errors']['email']?></span>
        <?php endif;?>
        <br><br><label for="password" style="display: block">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter password">
        <?php if($_SESSION && isset($_SESSION['errors']['password'])) : ?>
            <span style="color:red;"><?= $_SESSION['errors']['password']?></span>
        <?php endif;?>
        <br><br><label for="re-password" style="display: block">Reply Password</label>
        <input type="password" name="re_password" id="re-password" placeholder="Reply password">
        <?php if($_SESSION && isset($_SESSION['errors']['re_password'])) : ?>
            <span style="color:red;"><?= $_SESSION['errors']['re_password']?></span>
        <?php endif;?>
        <br><br><input type="submit" value="Register" name="register">
    </form>
</div>

</body>
</html>
