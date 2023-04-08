<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    $users = [
        [
            "id" => "4", "firstName" => "Angin", "lastName" => "Arakelyan",
            "email" => "exampleAngo@gmail.com", "image" => "images/female.png", "gender" => "female", "age" => "23"
        ],
        [
            "id" => "6", "firstName" => "Poxos", "lastName" => "Grigoryan",
            "email" => "examplePoxos@mail.ru", "image" => "images/male.png", "gender" => "male", "age" => "2"
        ],
        [
            "id" => "8", "firstName" => "Hovsep", "lastName" => "Aleksanyan",
            "email" => "exampleHovsep@mail.ru", "image" => "images/male.png", "gender" => "male", "age" => "17"
        ],
        [
            "id" => "5", "firstName" => "Anahit", "lastName" => "Gevogyan",
            "email" => "exampleAnahit@mail.ru", "image" => "images/female.png", "gender" => "female", "age" => "1"
        ]
];
    ?>
    <div class="container d-flex justify-content-between flex-wrap">
        <?php foreach ($users as $user) : ?>

            <div class="card mt-3 shadow bg-secondary text-white fs-5">
                <img src="<?php echo $user['image'] ?>" alt="Photo" class="card-img-top">
                <div class="card-body">
                    
                    <h2 class="card-title bg-light text-secondary"><?= $user['firstName'] . " " . $user['lastName']; ?></h2>

                    <?php foreach ($user as $key => $value) : ?>
                        <p class="fw-lighter"><span class="fw-normal"><?= $key ?></span><?= ": " . $value; ?></p>
                    <?php endforeach; ?>

                    <div class="card-footer text-center">
                        <?php
                        if ($user['age'] <= 2) {
                            echo "Child";
                        } elseif ($user['age'] < 18) {
                            echo "Minor";
                        } else {
                            echo "Adult";
                        };
                        ?>
                    </div>

                </div>
            </div>

        <?php endforeach; ?>
    </div>
</body>

</html>