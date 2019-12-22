<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include '../db.php'; 
    
    if(!$_SESSION['isAdmin'] && $_GET['module'] !== 'authorization'){
        header('Location:?module=authorization&action=login');
    }

$username = 'admin';
$pass = 'admin';

if($_GET['module'] === 'authorization' && $_GET['action'] === 'logout'){
    session_destroy();
    header('Location:?module=authorization&action=login');
}

if(!empty($_POST['username']) && !empty($_POST['pass'])){
    if(
        $_POST['username'] === $username
        &&
        $_POST['pass'] === $pass
    ){
        $_SESSION['isAdmin'] = true;
    } else {
        $_SESSION['userAdmin'] = false;
    }

    if($_SESSION['isAdmin']){
        header('Location:?module=default&action=main');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="../assets/img/icon.ico">
    <link href='https://fonts.googleapis.com/css?family=Dosis|Candal' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Open+Sans:400,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <title>Mino Admin Panel</title>
</head>

<body>
    <?php
        if ($_SESSION['isAdmin']) {
            include 'blocks/header.php';
        }
    ?>
    <!-- Content -->
    <div id="content">

        <?php if ($_SESSION['isAdmin']): ?>
        <header class="navbar navbar-default content__header">
            <div class="container-fluid">
                <a class="page-title" href="?module=default&action=main">
                    <?php 
                        if ($_GET['module'] == 'default')
                            echo 'Dashboard';
                        else if ($_GET['module'] == 'users')
                            echo 'Users';
                        else if ($_GET['module'] == 'posts')
                            echo 'Posts';
                        else if ($_GET['module'] == 'categories')
                            echo 'Categories';
                    ?>
                </a>

                <div class="dropdown admin">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuMenu" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-shield"></i> Admin Mino
                    </button>
                    <div class="dropdown-menu text-justify" aria-labelledby="dropdownMenuMenu">
                        <a href="?module=posts&action=create" class="dropdown-item">Add New Post</a>
                        <a href="?module=authorization&action=logout" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
        </header>
        <?php endif; ?>
        <div class="container-fluid admin__content">
            <? include 'modules/'.$_GET['module'].'/'.$_GET['action'].'.php';?>
        </div>
    </div>
    </div>

    <?php include 'blocks/footer.php';?>