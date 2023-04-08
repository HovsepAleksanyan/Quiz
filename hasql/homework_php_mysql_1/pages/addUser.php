<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container w-25 border mt-5 border-radius rounded border-primary shadow-lg">
        <form action="../core/addHandle.php" method="POST">
            <h2 class="text-primary text-center my-3">Add User</h2>
            <label for="name" class="input-label mt-3">Name:</label>
            <input type="text" name="name" class="form-control border-primary" id="name" />

            <label for="surname" class="input-label mt-3">Surame:</label>
            <input type="text" name="surname" class="form-control border-primary" id="surname" />

            <label for="profession" class="input-label mt-3">Profession:</label>
            <input type="text" name="profession" class="form-control border-primary" id="profession" />

            <label for="gender" class="input-label mt-3">Gender:</label>
            <input type="text" name="gender" class="form-control border-primary" id="gender" />

            <input type="submit" value="Submit" class="btn btn-primary mt-3 mb-3 d-block w-50 m-auto" />
        </form>
    </div>
</body>

</html>