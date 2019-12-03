<?php
    $website_title = 'Home';
    include_once 'blocks/header.php';
    include_once 'blocks/intro.php';
?>


<!--content -->
<div class="content mt-4">
    <div class="container">
        <div class="row">
            <section class="col-md-9 posts">

                <div class="post">
                    <div class="row">
                        <div class="col-lg-5 col-xl-4">

                            <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                                <img class="img-fluid" src="assets/img/posts/1.jpg" alt="Sample image">
                                <a href="post.html">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                        </div>

                        <div class="col-lg-7 col-xl-8 post__content">

                            <a class="post__title" href="post.html">Sangar Slider Demo</a>

                            <div class="post__info">
                                <span class="post__date">July 1, 2014</span>
                                <span class="post__author">Admin Mino</span>
                                <span class="post__comments-quantity">No Comments</span>
                                <div class="post__category">Posted in <a href="#">Traveling</a></div>
                            </div>

                            <p class="post__text">This is an example of a WordPress post, you could edit this
                                to put
                                information about yourself or your site so readers know where you are coming from. You
                                can create as
                                many posts as you like in order to share with your readers what is on your mind.
                            </p>

                            <a class="btn btn--black" href="post.html">Read More</a>

                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.post -->

            </section>
            <!-- /.posts -->

            <?php include_once 'blocks/aside.php'; ?>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.content -->

<?php include_once 'blocks/footer.php'; ?>
<?php include_once 'blocks/auth.php'; ?>