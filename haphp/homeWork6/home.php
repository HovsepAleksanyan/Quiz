<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container mt-5 mb-5 m-auto border w-50 bg-light">
        <h2 class="text-center text-primary">Registration form</h2>
        <form action="registration.php" method="POST">
            <label for="name" class="form-label w-100 mt-3">
                Name:
                <input type="text" name="name" id="name" class="form-control">
            </label>
            <label for="surName" class="form-label w-100 mt-3">
                Surname:
                <input type="text" name="surName" id="surName" class="form-control">
            </label>
            <label for="email" class="form-label w-100 mt-3">
                Email:
                <input type="email" name="email" id="email" class="form-control">
            </label>
            <label for="password" class="form-label w-100 mt-3">
                Password:
                <input type="password" name="password" id="password" class="form-control">
            </label>
            <input type="submit" value="Submit" class="d-block m-auto w-50 mt-3 mb-3">
        </form>
    </div>

    <hr>

    <div class="container mt-5 mb-5 m-auto border w-25 bg-light">
        <h2 class="text-center text-success">Login form</h2>
        <form action="logIn.php" method="POST">
            <label for="eMail" class="form-label w-100 mt-3">
                Email:
                <input type="email" name="email" id="eMail" class="form-control">
            </label>
            <label for="passWord" class="form-label w-100 mt-3">
                Password:
                <input type="password" name="password" id="passWord" class="form-control">
            </label>
            <input type="submit" value="Submit" class="d-block m-auto w-50 mt-3 mb-3">
        </form>
    </div>

</body>

</html>