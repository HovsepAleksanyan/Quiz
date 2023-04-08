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
    <title>Login</title>
    <style>
        .box, f_input {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .f_input {
            padding: 20px;
        }
        .f_input >label {
            margin-right: 15px;
        }
        .btn {
            display: flex;
            flex-direction: row;
            margin: 25px;
            justify-content: end;
            gap: 10px;
        }
        .btn input {
            padding: 5px 25px;
            background-color: #333333;
            color: aliceblue;
            border: 1px solid #000;
            border-radius: 10px;
        }
        .errors {
            padding: 15px;
            background-color: rgb(173 9 9 / 61%);
            color: aliceblue;
            font-size: 22px;
        }
        .errors p {
            text-shadow: 2px 2px 6px #333333 ;
        }
        .hide {
            display: none;
        }

    </style>
</head>
<body>
<h1 style="text-align: center">Մուտք</h1>
<?php if(isset($_SESSION['errors']) && isset($_SESSION['errors']['message'])):?>
<div class="errors">
    <p><?= $_SESSION['errors']['message']; ?></p>
</div>
<?php endif;?>
<form action="../core/loginHandle.php" method="post">
<fieldset>
    <legend>Մուտքագրեք տվյալները</legend>
    <div class="box">
        <div class="f_input">
            <label for="username">Մուտքանուն</label>
            <input type="text" name="username" placeholder="Մուտքանուն"
            <?php if(isset($_SESSION['hin_tvyalner'])):?>
            value="<?= $_SESSION['hin_tvyalner']['username'];?>"
            <?php endif;?>
            >
        </div>
        <div class="f_input">
            <label for="password">Գաղտնաբառ</label>
            <input type="password" name="password" placeholder="Գաղտնաբառ">
        </div>
    </div>
</fieldset>
    <div class="btn">
        <input type="reset" value="Մաքրել">
        <input type="submit" value="Մուտք">
    </div>
</form>
</body>
</html>
<?php session_unset(); ?>