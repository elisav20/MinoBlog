<?php
    $website_title = 'Profile';
    include_once 'blocks/header.php';
?>

<!-- content -->
<div class="content">
    <div class="container">
        <div class="row">
            <section class="col-md-9 posts">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Admin Mino</li>
                    </ol>
                </nav>

                <div class="post">
                    <div class="row">
                        <div class="col-lg-5 col-xl-4">

                            <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                                <img class="img-fluid" src="assets/img/posts/1.jpg" alt="Sample image">
                                <a href="post.php">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                        </div>

                        <div class="col-lg-7 col-xl-8 post__content">

                            <a class="post__title" href="post.php">Sangar Slider Demo</a>

                            <div class="post__info">
                                <span class="post__date">July 1, 2014</span>
                                <span class="post__author">Admin Mino</span>
                                <span class="post__comments-quantity">No Comments</span>
                                <div class="post__category">Posted in <a href="#">Traveling</a></div>
                            </div>

                            <p class="post__text">This is an example of a WordPress post, you could edit this
                                to put
                                information about yourself or your site so readers know where you are coming from.
                                You can create as
                                many posts as you like in order to share with your readers what is on your mind.
                            </p>

                            <a class="btn btn--black" href="post.php">Read More</a>

                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.post -->

            </section>
            <!-- /.posts -->

            <!-- .sidebar -->
            <div class="col-md-3 sidebar">

                <section class="recent__posts">
                    <h4>Recent posts</h4>

                    <div class="recent__post-info">
                        <a class="recent__post-title" href="#">Perfection is Boring, Getting Better is Where All the
                            Fun Is</a>
                        <div class="recent__post-date">July 1, 2014</div>
                    </div>

                    <div class="recent__post-info">
                        <a class="recent__post-title">Design From the Spine and You’ll Be Fine</a>
                        <div class="recent__post-date">July 1, 2014</div>
                    </div>
                </section>

                <section class="category">
                    <h4>Category</h4>

                    <div class="category__info">
                        <a class="category__name" href="#">Traveling</a>
                    </div>

                    <div class="category__info">
                        <a class="category__name" href="#">Transport</a>
                    </div>
                </section>

            </div>
            <!-- /.sidebar -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>
<!-- /.content -->

<?php include_once 'blocks/footer.php'; ?>