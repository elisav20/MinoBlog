<?php
    $userName = trim(filter_var($_POST['login-username'], FILTER_SANITIZE_STRING));
    $pass = trim(filter_var($_POST['login-pass'], FILTER_SANITIZE_STRING));

    $error = '';
    
    if (strlen($userName) <= 3)
        $error = 'The User Name must be more than three characters';
    else if (strlen($pass) <= 3)
        $error = 'The password must be more than three characters';

    if ($error != '') {
        echo $error;
        exit(); 
    }

    $hash = "ddghus454fdkgdkjvz324567";
    $pass = md5($pass . $hash);

    include_once '../../db.php';
    
    $sql = 'SELECT `id` FROM users WHERE `username` = :username && `pass` = :pass';
    $query = $pdo->prepare($sql);
    $query->execute(['username' => $userName, 'pass' => $pass]);

    $user = $query->fetch(PDO::FETCH_OBJ);
    if($user->id == 0)
        echo 'User does not exist';
    else {
        setcookie('login', $userName, time() + 3600, "/" );
        echo 'SUCCESS';
    }
?>