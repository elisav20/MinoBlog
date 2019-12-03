<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Open+Sans:400,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Post</title>
</head>

<body>

    <!-- Login / Register Modal-->
    <div class="modal" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close position-absolute right-0 top-0" data-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab"
                                aria-controls="login" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                                aria-controls="register" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3">
                                <div class="md-form mb-5">
                                    <i class="fas fa-user prefix grey-text"></i>
                                    <input type="text" id="form3" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="form3">Your username</label>
                                </div>

                                <div class="md-form mb-4">
                                    <i class="fas fa-lock prefix grey-text"></i>
                                    <input type="password" id="defaultForm-pass" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Your
                                        password</label>
                                </div>

                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <input class="btn btn-default" type="submit" value="LOGIN">
                            </div>
                        </div>

                        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <div class="modal-header text-center">
                                <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3">
                                <div class="md-form mb-5">
                                    <i class="fas fa-signature prefix grey-text"></i>
                                    <input type="text" id="orangeForm-name" class="form-control validate">
                                    <label data-error="wrong" data-success="right"
                                        for="orangeForm-name">Firstname</label>
                                </div>
                                <div class="md-form mb-5">
                                    <i class="fas fa-signature prefix grey-text"></i>
                                    <input type="text" id="orangeForm-name" class="form-control validate">
                                    <label data-error="wrong" data-success="right"
                                        for="orangeForm-name">Lastname</label>
                                </div>
                                <div class="md-form mb-5">
                                    <i class="fas fa-user prefix grey-text"></i>
                                    <input type="text" id="orangeForm-name" class="form-control validate">
                                    <label data-error="wrong" data-success="right"
                                        for="orangeForm-name">Username</label>
                                </div>
                                <div class="md-form mb-5">
                                    <i class="fas fa-envelope prefix grey-text"></i>
                                    <input type="email" id="orangeForm-email" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
                                </div>

                                <div class="md-form mb-4">
                                    <i class="fas fa-lock prefix grey-text"></i>
                                    <input type="password" id="orangeForm-pass" class="form-control validate">
                                    <label data-error="wrong" data-success="right"
                                        for="orangeForm-pass">Password</label>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <input class="btn btn-default" type="submit" value="SIGN UP">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login / Register Modal-->

    <!-- header -->
    <div class="header">
        <div class="container">
            <div class="header__logo">
                <!-- Navbar brand -->
                <a class="navbar-brand" href="index.html">
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
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="categories.html">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="store.html">Store</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.html">Contacts</a>
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

                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#signup-modal">Login</a>
                        <a class="dropdown-item" href="#">Add new post</a>
                        <a class="dropdown-item" href="user_profile.html">My posts</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                </div>

            </div>
        </nav>
        <!--/.Navbar-->
    </div>
    <!-- /.header -->

    <!-- .contact -->
    <section class="contact">
        <div class="container">
            <h2>Contact</h2>
            <div class="row">
                <div class="col-12">
                    <div id="map-container-section" class="z-depth-1-half map-container-section mb-4"
                        style="height: 400px">
                        <iframe src="https://maps.google.com/maps?q=Manhatan&t=&z=15&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="contact__title">How to Contact us</div>
                    <p class="contact__text">This contact use Contact Form 7 plugin. When you installed default Contact
                        Form 7 form submission, it will adapted to Mino default CSS styles as you seen in this page.</p>

                    <form>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="contact-name" class="form-control">
                                    <label for="contact-name" class="">Your name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="contact-email" class="form-control">
                                    <label for="contact-email" class="">Your email</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="contact-Subject" class="form-control">
                                    <label for="contact-Subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea id="contact-message" class="form-control md-textarea" rows="3"></textarea>
                                    <label for="contact-message">Your message</label>
                                </div>
                            </div>
                        </div>

                    </form>

                    <div class="text-center mt-4">
                        <button class="btn btn-default btn-rounded btn-md" type="submit">SEND</button>
                    </div>
                </div>
                <!-- /.col-6 -->

                <div class="col-6">
                    <div class="contact__title">How you can reach us <br>Tonjoo </div>
                    <p class="contact__text">Jalan Tongkol Raya No 5 - Minomartani Ngaglik Sleman, Yogyakarta 55581
                        +62 812 1865 7154.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.contact -->



    <!-- .footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <section class="footer__recent-posts">
                        <h4>Recent posts</h4>

                        <div class="footer__recent-post__info">
                            <a class="footer__recent-post__title" href="#">Perfection is Boring, Getting Better is Where
                                All the Fun
                                Is</a>
                            <div class="footer__recent-post__date">July 1, 2014</div>
                        </div>

                        <div class="footer__recent-post__info">
                            <a class="footer__recent-post__title">Design From the Spine and You’ll Be Fine</a>
                            <div class="footer__recent-post__date">July 1, 2014</div>
                        </div>
                    </section>
                </div>

                <div class="col-md-3">
                    <section class="footer__nav">
                        <h4>Pages</h4>

                        <a class="footer__nav-link" href="index.html">Home</a>
                        <a class="footer__nav-link" href="categories.html">Categories</a>
                        <a class="footer__nav-link" href="store.html">Store</a>
                        <a class="footer__nav-link" href="contact.html">Contacts</a>
                    </section>
                </div>

                <div class="col-md-3">
                    <section class="footer__categories">
                        <h4>Categories</h4>

                        <div class="footer__categories-content">
                            <a class="footer__categories-item rounded-pill" href="#">Traveling</a>
                            <a class="footer__categories-item rounded-pill" href="#">Traveling</a>
                            <a class="footer__categories-item rounded-pill" href="#">Traveling</a>
                        </div>
                    </section>
                </div>

                <div class="col-md-3">
                    <section class="footer__text">
                        <h4>Text widget</h4>
                        <p>We’re both adults. I can’t pretend I don’t know that person is you. I want there to be no
                            confusion. I
                            know I owe you my life. And more than that, I respect the strategy. No speeches. Short
                            speech. You lost
                            your partner today. </p>
                    </section>
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </footer>
    <!-- .footer -->


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js">
    </script>
</body>

</html>