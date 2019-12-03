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
                        <li class="nav-item">
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

    <!-- content -->
    <div class="content">
        <div class="container">
            <div class="row">

                <!-- .posts -->
                <section class="col-md-9 posts">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Traveling</a></li>
                            <li class="breadcrumb-item active">Sangar Slider Demo</li>
                        </ol>
                    </nav>

                    <div class="post">

                        <div class="post__content">
                            <h1 class="post__title post__title--single">Sangar Slider Demo</h1>

                            <div class="post__info">
                                <span class="post__date post__date--single">July 1, 2014</span>
                                <span class="post__author post__author--single">Admin Mino</span>
                                <span class="post__comments-quantity">No Comments</span>
                                <div class="post__category">Posted in <a href="#">Traveling</a></div>
                            </div>

                            <img class="img-fluid mb-4" src="assets/img/posts/1.jpg" alt="">

                            <div class="post__text">
                                <p>This is an example of a WordPress post, you could edit this to
                                    put
                                    information about yourself or your site so readers know where you are coming from.
                                    You
                                    can create as
                                    many posts as you like in order to share with your readers what is on your mind.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus similique
                                    excepturi veniam, debitis, repellat aliquam explicabo eaque et, quibusdam dolor ab.
                                    Soluta deleniti, recusandae, illo mollitia veritatis voluptate! Quae, ipsam. Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit. Suscipit animi accusantium harum
                                    dolor distinctio, fugiat, officiis facere et unde dolore officia tempore assumenda
                                    quae laudantium eveniet ipsum optio doloremque eos?</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis harum deserunt
                                    voluptates vel nam quis itaque illum magni eveniet blanditiis iusto esse, ducimus
                                    voluptatum, ea, suscipit, animi cupiditate perspiciatis adipisci! Lorem ipsum dolor
                                    sit amet, consectetur adipisicing elit. Perspiciatis deleniti quae quasi rerum ea
                                    quod nemo ipsum necessitatibus, enim accusantium reiciendis cum, magni recusandae
                                    ipsam adipisci. Hic id quam saepe.</p>

                                <p>Quam diu etiam furor iste tuus nos eludet? Quae vero auctorem tractata ab fiducia
                                    dicuntur. Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Cum ceteris in
                                    veneratione tui montes, nascetur mus. Excepteur sint obcaecat cupiditat non proident
                                    culpa. Nec dubitamus multa iter quae et nos invenerat. Nec dubitamus multa iter quae
                                    et nos invenerat. Quam temere in vitiis, legem sancimus haerentia.</p>
                            </div>

                        </div>
                    </div>

                    <!-- .comments -->
                    <section class="comments">
                        <h1 class="comments__number">Comments 8</h1>

                        <div class="comment__content">
                            <div class="comment__info">
                                <span class="comment__icon">
                                    <i class="fas fa-user"></i>
                                </span>
                                <span class="comment__username">admin_mino </span>
                                <span class="comment__dot">
                                    <i class="fas fa-circle"></i>
                                </span>
                                <span class="comment__date">01.12.2019 20:31</span>
                            </div>

                            <p class="comment__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Corporis
                                harum deserunt voluptates vel nam quis itaque illum magni eveniet blanditiis iusto
                                esse,
                                ducimus voluptatum, ea, suscipit, animi cupiditate perspiciatis adipisci! Lorem
                                ipsum
                                dolor sit amet, consectetur adipisicing elit.</p>
                        </div>

                        <div class="comment__content">
                            <div class="comment__info">
                                <span class="comment__icon">
                                    <i class="fas fa-user"></i>
                                </span>
                                <span class="comment__username">admin_mino </span>
                                <span class="comment__dot">
                                    <i class="fas fa-circle"></i>
                                </span>
                                <span class="comment__date">01.12.2019 20:31</span>
                            </div>

                            <p class="comment__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Corporis
                                harum deserunt voluptates vel nam quis itaque illum magni eveniet blanditiis iusto
                                esse,
                                ducimus voluptatum, ea, suscipit, animi cupiditate perspiciatis adipisci! Lorem
                                ipsum
                                dolor sit amet, consectetur adipisicing elit.</p>
                        </div>

                        <section class="my-5">
                            <h1 class="comment__leave">Leave a Comment</h1>
                            <p>Your email address will not be published. Required fields are marked</p>

                            <form class="px-1 mt-4">

                                <div class="md-form mt-5">
                                    <label for="replyFormName">Your name</label>
                                    <input type="email" id="replyFormName" class="form-control">
                                </div>

                                <div class="md-form mt-5">
                                    <label for="replyFormEmail">Your e-mail</label>
                                    <input type="email" id="replyFormEmail" class="form-control">
                                </div>

                                <div class="md-form">
                                    <label for="replyFormComment">Your comment</label>
                                    <textarea class="form-control md-textarea" id="replyFormComment"
                                        rows="4"></textarea>
                                </div>

                                <div class="text-center mt-4">
                                    <button class="btn btn-default btn-rounded btn-md" type="submit">Post</button>
                                </div>

                            </form>

                        </section>

                    </section>
                    <!-- /.comments -->

                </section>
                <!-- /.posts -->

                <!-- .sidebar -->
                <aside class="col-md-3 sidebar">

                    <!-- .recent__posts -->
                    <section class="recent__posts">
                        <h4>Recent posts</h4>

                        <div class="recent__post-info">
                            <a class="recent__post-title" href="#">Perfection is Boring, Getting Better is Where All
                                the
                                Fun Is</a>
                            <div class="recent__post-date">July 1, 2014</div>
                        </div>

                        <div class="recent__post-info">
                            <a class="recent__post-title">Design From the Spine and You’ll Be Fine</a>
                            <div class="recent__post-date">July 1, 2014</div>
                        </div>
                    </section>
                    <!-- /.recent__posts -->

                    <!-- .category -->
                    <section class="category">
                        <h4>Category</h4>

                        <div class="category__info">
                            <a class="category__name" href="#">Traveling</a>
                        </div>

                        <div class="category__info">
                            <a class="category__name" href="#">Transport</a>
                        </div>
                    </section>
                    <!-- /.category -->

                </aside>
                <!-- /.sidebar -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content -->

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