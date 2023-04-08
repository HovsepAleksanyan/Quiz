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
<h1>Registration</h1>
<a href="http://lavdaser.loc/lesson6/register.php?name=hfghfg&email=dfhdf%40dsfg.dfg&password=dfhfd&re_password=dfghdf&image=&register=Register">Register by link</a>
<form action="register.php" method="post" name="regForm" id="r_form" enctype="multipart/form-data">
    <label for="name">Name</label>
    <input type="hidden" name="csrf-token" value="sagfsdfsdaf5df4g5fd4g5">
    <input type="hidden" name="categories[0]" id="name" value="shor">
    <input type="hidden" name="categories[1]" id="name" value="koshik">
    <input type="text" name="name" id="name">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <br>
    <label for="password">Reply Password</label>
    <input type="re_password" name="re_password" id="re_password">
    <br>
    <input type="file" name="image" accept="image/*">
    <br> <br>
    <input type="submit" name="register" value="Register">
</form>
</body>
</html>
