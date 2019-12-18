<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="assets/img/icon.ico">
    <link href='https://fonts.googleapis.com/css?family=Dosis|Candal' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Open+Sans:400,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title><?=$website_title?></title>
</head>

<body>

    <!-- header -->
    <div class="header">
        <div class="container">
            <div class="header__logo">
                <!-- Navbar brand -->
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/header__logo.png" alt="logo">
                </a>
            </div>
        </div>
        <!-- /.container -->

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="categories.php">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Store</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contacts</a>
                        </li>
                    </ul>
                    <form class="form-inline">
                        <div class="input-group md-form mt-0 mb-0 form-sm form-2">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <span class="input-group-text rounded-right lighten-3" id="basic-text1"><i
                                        class="fas fa-search text-grey" aria-hidden="true"></i></span>
                            </div>
                    </form>
                </div>

                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user mr-2"></i>My Profile </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info"
                        aria-labelledby="navbarDropdownMenuLink-4">

                        <?php
                            $id_user = add_userID($_COOKIE['login']);
                            if($_COOKIE['login'] == ''):
                        ?>
                        <a class="dropdown-item" href="authorization.php">Login</a>

                        <?php
                            else:
                        ?>

                        <a class="dropdown-item" href="add_post.php">Add new post</a>
                        <a class="dropdown-item" href="user_profile.php?id=<?=$id_user?>">My posts</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" id="exit_btn" href="#">Log out</a>

                        <?php
                            endif;
                        ?>
                    </div>
                </div>

            </div>
        </nav>
        <!--/.Navbar-->

    </div>
    <!-- /.header -->