<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container w-25 border rounded mt-3 border-primary bg-light shadow-lg">
        <h2 class="text-center mt-3 mb-3 text-primary">Create User</h2>

        <form action="../core/createHandle.php" method="POST">

            <label for="name" class="input-label mt-3 <?php if (isset($_SESSION['errors']['name'])) echo 'text-danger' ?>">
                <?php if (isset($_SESSION['errors']['name'])) : ?>
                    <?php echo $_SESSION['errors']['name']; ?>
                <?php else : ?>
                    Name:
                <?php endif; ?>
            </label>
            <input type="text" name="name" class="form-control bg-light" id="name" 
            <?php if (isset($_SESSION['oldData']['name'])) : ?> 
                value="<?php echo $_SESSION['oldData']['name']; ?>"
            <?php endif; ?> 
                />


            <label for="surname" class="input-label mt-3 <?php if (isset($_SESSION['errors']['surname'])) echo 'text-danger' ?>">
                <?php if (isset($_SESSION['errors']['surname'])) : ?>
                    <?php echo $_SESSION['errors']['surname']; ?>
                <?php else : ?>
                    Surname:
                <?php endif; ?>
            </label>
            <input type="text" name="surname" class="form-control bg-light" id="surname" 
            <?php if (isset($_SESSION['oldData']['surname'])) : ?> 
                value="<?php echo $_SESSION['oldData']['surname']; ?>"
            <?php endif; ?> 
                />

            <label for="bday" class="input-label mt-3 <?php if (isset($_SESSION['errors']['bday'])) echo 'text-danger' ?>">
                <?php if (isset($_SESSION['errors']['bday'])) : ?>
                    <?php echo $_SESSION['errors']['bday']; ?>
                <?php else : ?>
                    Birthday:
                <?php endif; ?>
            </label>
            <input type="date" name="bday" class="form-control bg-light" id="bday" 
            <?php if (isset($_SESSION['oldData']['bday'])) : ?> 
                value="<?php echo $_SESSION['oldData']['bday']; ?>"
            <?php endif; ?> 
                />


            <label for="email" class="input-label mt-3 <?php if (isset($_SESSION['errors']['email'])) echo 'text-danger' ?>">
                <?php if (isset($_SESSION['errors']['email'])) : ?>
                    <?php echo $_SESSION['errors']['email']; ?>
                <?php else : ?>
                    Email:
                <?php endif; ?>
            </label>
            <input type="email" name="email" class="form-control bg-light" id="email" 
            <?php if (isset($_SESSION['oldData']['email'])) : ?> 
                value="<?php echo $_SESSION['oldData']['email']; ?>"
            <?php endif; ?> 
                />


            <label for="username" class="input-label mt-3 <?php if (isset($_SESSION['errors']['username'])) echo 'text-danger' ?>">
                <?php if (isset($_SESSION['errors']['username'])) : ?>
                    <?php echo $_SESSION['errors']['username']; ?>
                <?php else : ?>
                    Username:
                <?php endif; ?>
            </label>
            <input type="text" name="username" class="form-control bg-light" id="username" 
            <?php if (isset($_SESSION['oldData']['username'])) : ?> 
                value="<?php echo $_SESSION['oldData']['username']; ?>"
            <?php endif; ?> 
                />


            <label for="password" class="input-label mt-3 <?php if (isset($_SESSION['errors']['password'])) echo 'text-danger' ?>">
                <?php if (isset($_SESSION['errors']['password'])) : ?>
                    <?php echo $_SESSION['errors']['password']; ?>
                <?php else : ?>
                    Password:
                <?php endif; ?>
            </label>
            <input type="password" name="password" class="form-control bg-light" id="password" 
            <?php if (isset($_SESSION['oldData']['password'])) : ?> 
                value="<?php echo $_SESSION['oldData']['password']; ?>"
            <?php endif; ?> 
                />

            <input type="submit" value="Create" class="btn btn-outline-primary d-block m-auto w-50 mt-3 mb-3" />
        </form>
    </div>

    <?php if (isset($_SESSION['errors']['checkUser'])) : ?>
        <div class="alert alert-danger container w-25 mt-3">
            <strong>
                <?php echo $_SESSION['errors']['checkUser']; ?>
            </strong>
        </div>
    <?php endif; ?>
</body>

</html>
<?php
session_unset();
?>