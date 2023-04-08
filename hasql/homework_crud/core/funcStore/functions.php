<?php
function input_check($data)
{
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

//age calculator
function calcAge($bday)
{
    $today = date('Y-m-d');

    $age = date_diff(date_create($bday), date_create($today));
    $ageResult = $age->format('%y');
    return $ageResult;
}

function checkDbUsers($dataBase, $username)
{
    $sqlSelect = "SELECT `username` FROM `my_db`.`users`";

    $resTable = mysqli_query($dataBase, $sqlSelect);

    //push users in array
    $dbUsersArr = [];
    while ($row = mysqli_fetch_assoc($resTable)) {
        array_push($dbUsersArr, $row);
    }

    //is there?
    foreach ($dbUsersArr as $dbUser) {
        if ($username === $dbUser['username']) {
            $_SESSION['errors']['checkUser'] = 'There is user with this `username`.';

            mysqli_close($dataBase);
            header('location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }
}

//status
function checkStatus($age)
{
    if ($age >= 60) {
        return 'Pensionier';
    } elseif ($age >= 18) {
        return 'Adult';
    } elseif ($age >= 7) {
        return 'Minor';
    } else {
        return 'Child';
    }
}

//validation
function check($field, $value)
{
    if ($field == 'name') {
        if ($value != '') {
            if (strlen($value) <= 20) {
                return preg_match('/^[A-Za-z]*$/', $value);
            }
        }
    }

    if ($field == 'surname') {
        if ($value != '') {
            if (strlen($value) <= 25) {
                return preg_match('/^[A-Za-z]*$/', $value);
            }
        }
    }

    if ($field == 'bday') {
        if ($value != '') {
            return true;
        }
    }

    //email ????

    if ($field == 'username') {
        if ($value != '') {
            if (strlen($value) <= 15) {
                return preg_match('/^[A-Za-z]*$/', $value);
            }
        }
    }

    if ($field == 'password') {
        if ($value != '') {
            if (strlen($value) <= 20 && strlen($value) >= 6) {
                return true;
            }
        }
    }

    return false;
}
