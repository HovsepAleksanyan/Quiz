<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/general.css">
</head>
<body>
<h1>My Site</h1>
<?php if(isset($_SESSION['auth_user'])):?>
<p><?= $_SESSION['auth_user']['name']?></p>
<?php else:?>
<div id="auth">
    <a href="pages/loginForm.php">Login</a>
    <a href="pages/registerForm.php">Register</a>
</div>
<?php endif;?>
</body>
</html>
