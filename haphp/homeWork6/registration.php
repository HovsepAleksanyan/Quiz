<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registration & Login</title>
</head>

<body>
    <?php
    if ($_POST) {
        $name = $_POST['name'] ?? '';
        $surName = $_POST['surName'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
    }
    ?>

    <?php if ($name != "" & $surName != "" & $email != "" & $password != "") : ?>
        <table class="table table-striped mt-5 table-bordered w-50 m-auto">
            <thead>
                <tr>
                    <th>Key</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_POST as $key => $value) : ?>
                    <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <div class="alert alert-danger container mt-5">
            <strong>Error: </strong> You have not filled in all fields
        </div>
    <?php endif; ?>

</body>

</html>