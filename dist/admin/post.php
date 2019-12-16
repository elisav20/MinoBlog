<?php
    $website_title = 'Post title';
    include_once 'blocks/header.php';
?>

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
                <?php include_once 'blocks/comments.php'; ?>

            </section>
            <!-- /.posts -->

            <?php include_once 'blocks/aside.php'; ?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.content -->

<?php
    include_once 'blocks/footer.php';
?>