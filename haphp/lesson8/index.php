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
    <title>Example</title>
    <style>
        body {
            color: blueviolet;
            font-size: 25px;
            font-weight: bold;
            font-family: monospace;
        }
        .links {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .links >a {
            text-decoration: none;
            border: 1px solid #333;
            padding: 10px 15px;
            margin: 25px;
            border-radius: 15px;
            background-color: burlywood;
        }
    </style>
</head>
<body>
<div class="links">
    <a href="pages/login.php">Login</a>
    <a href="pages/register.php">SingUp</a>
</div>


</body>
</html>
