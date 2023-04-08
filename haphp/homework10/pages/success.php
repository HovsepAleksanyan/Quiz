<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <?php if(isset($_SESSION['loginUser'])) : ?>
        <div class="alert alert-success container w-50 mt-5 text-center shadow">
            <h1>
                <?= $_SESSION['loginUser']['name'] . " " . $_SESSION['loginUser']['surname'] ?>
            </h1>
            <p class="fs-2 mt-3">
                <i>
                    Successfuly login!
                </i>
            </p>
        </div>
    <?php endif; ?>

        <div class="border w-25 m-auto mt-5 text-center bg-light shadow">
            <a href="../index.php" class="text-decoration-underline text-dark fw-bold fs-3">Home Page</a>
        </div>

</body>

</html>
