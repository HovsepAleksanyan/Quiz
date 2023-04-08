<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/general.css">
</head>
<body>
<h1>Register</h1>
<form action="../controllers/registerHandle.php?id=1" id="register-form" method="post">
    <div>
        <label for="name">Name</label>
        <div>
            <input type="text" name="name" id="name" placeholder="Please enter your name">
            <span class="error"><span>
        </div>
    </div>
    <div>
        <label for="username">Username</label>
        <div>
            <input type="text" name="username" id="username" placeholder="Please enter your username">
            <span class="error"><span>
        </div>
    </div>
    <div>
        <label for="password">Password</label>
        <div>
            <input type="password" name="password" id="password" placeholder="Please enter your password">
            <span class="error"><span>
        </div>
    </div>
    <div>
        <label for="re-password">Reply Password</label>
        <div>
            <input type="password" name="re_password" id="re-password" placeholder="Please Reply your password">
            <span class="error"><span>
        </div>
    </div>
    <div class="btn">
        <input type="submit" value="register">
    </div>
</form>

</body>
</html>
