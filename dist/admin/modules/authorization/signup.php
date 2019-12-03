<?php
    $firstName = trim(filter_var($_POST['signup-firstname'], FILTER_SANITIZE_STRING));
    $lastName = trim(filter_var($_POST['signup-lastname'], FILTER_SANITIZE_STRING));
    $userName = trim(filter_var($_POST['signup-username'], FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['signup-email'], FILTER_SANITIZE_EMAIL));
    $pass = trim(filter_var($_POST['signup-pass'], FILTER_SANITIZE_STRING));

    $error = '';
    if (strlen($firstName) <= 3)
        $error = 'Incorrect First Name';
    else if (strlen($lastName) <= 3)
        $error = 'Incorrect Last Name';
    else if (strlen($userName) <= 3)
        $error = 'Incorrect User Name';
    else if (strlen($email) <= 3)
        $error = 'Incorrect Email adress';
    else if (strlen($pass) <= 3)
        $error = 'Incorrect Password';

    if ($error != '') {
        echo $error;
        exit(); 
    }

    $hash = "ddghus454fdkgdkjvz324567";
    $pass = md5($pass . $hash);

    include_once '../../db.php';
    
    $sql = 'INSERT INTO users(firstname, lastname, username, email, pass) VALUES(?, ?, ?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$firstName, $lastName, $userName, $email, $pass]);

    echo 'SUCCESS';
?>