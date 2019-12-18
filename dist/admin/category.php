<?php
    $website_title = 'Category';
    include_once 'blocks/header.php';
?>

<!-- content -->
<div class="content">
    <div class="container">
        <div class="row">
            <section class="col-md-9 posts">
                <?php
                    $category = get_category ($_GET['id']);
                    $count_posts = get_count_category_posts ($_GET['id']);
                    if ($count_posts == 0):
                ?>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"><?=$category["name"]?></li>
                    </ol>
                </nav>

                <h1 class="text-center mb-3 vh-100">No posts have been added to this category.</h1>

                <?php
                    else:
                ?>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"><?=$category["name"]?></li>
                    </ol>
                </nav>

                <?php
                    $posts = get_posts_byCategory ($_GET['id']);
                    foreach ($posts as $post): 
                    
                    $category = get_category ($post["id_category"]);   
                ?>

                <div class="post">
                    <div class="row">
                        <div class="col-lg-5 col-xl-4">

                            <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                                <img class="img-fluid" src="assets/img/posts/<?=$post['photo'];?>" alt="Sample image">
                                <a href="post.php">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                        </div>

                        <div class="col-lg-7 col-xl-8 post__content">

                            <a class="post__title" href="post.php?id=<?=$post["id"]; ?>"><?=$post["title"]; ?></a>

                            <div class="post__info">
                                <span class="post__date"><?=date("F j, Y",strtotime($post["date"])); ?></span>
                                <a class="post__author" href="user_profile.php?id=<?=$post["id_user"]?>">
                                    <?=$author["firstname"] . ' ' . $author["lastname"] ?>
                                </a>
                                <span class="post__comments-quantity">

                                    <?php
                                        $quantity = get_comments_quantity ($post["id"]);
                                        if ($quantity == 0)
                                            echo 'No comments';
                                        else 
                                            echo $quantity . ' comments'
                                    ?>

                                </span>
                                <div class="post__category">Posted in <a
                                        href="category.php?id=<?=$category["id_category"];?>"><?=$category["name"]; ?></a>
                                </div>
                            </div>

                            <p class="post__text">
                                <?php 
                                    $text = $post["text"];
                                    $text = strip_tags($text);
                                    $text = substr($text, 0, 350);
                                    $text = rtrim($text, "!,.-");
                                    $text = substr($text, 0, strrpos($text, ' '));
                                    echo $text."… "; 
                                ?>
                            </p>

                            <a class="btn btn--black" href="post.php?id=<?=$post["id"]; ?>">Read More</a>

                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.post -->
                <?php 
                    endforeach;
                    endif;
                ?>
            </section>
            <!-- /.posts -->

            <?php include_once 'blocks/aside.php';?>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>
<!-- /.content -->

<?php include_once 'blocks/footer.php'; ?>