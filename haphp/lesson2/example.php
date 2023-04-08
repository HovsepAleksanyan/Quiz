
<?php
$users = [['first_name'=>"Poxos",
    'last_name'=>"Poxosyan",
    'email'=>"test@mail.ru", 'age'=>12,
    'id'=>1 ]];
?>
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
<h1>Users</h1>
<div>
    <?php foreach($users as $user): ?>
        <?php foreach ($user as $k => $value) :?>


            <p><?= $value; ?></p>
            <?php if($k == 'id'):?>
            <h2 id= <?=$value ?>>
                <?= $value?>
            </h2>
            <?php else: ?>
            <p><?=$value ?></p>
            <?php endif;?>
            <?php if($k == 'age'): ?>
                    <?php else: ?>

            <?php endif;?>
        <?php endforeach ?>
      <?php endforeach; ?>

</div>
</html>
</body>
