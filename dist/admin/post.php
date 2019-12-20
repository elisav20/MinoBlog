<?php
    $website_title = 'Post info';
    include_once 'blocks/header.php';

    $post = get_post($_GET['id']);
    $category = get_category ($post["id_category"]);
    $author = get_author ($post["id_user"]);
?>

<!-- content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="statusMsg col-md-9"></div>
            <!-- .posts -->
            <section class="col-md-9 posts">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a
                                href="category.php?id=<?=$category["id_category"];?>"><?=$category["name"]; ?></a></li>
                        <li class="breadcrumb-item active"><?=$post["title"]; ?></li>
                    </ol>
                </nav>

                <div class="post">

                    <div class="post__content">
                        <h1 class="post__title post__title--single"><?=$post["title"]; ?></h1>

                        <div class="post__info">
                            <span
                                class="post__date post__date--single"><?=date("F j, Y",strtotime($post["date"])); ?></span>
                            <span
                                class="post__author post__author--single"><?=$author["firstname"] . ' ' . $author["lastname"] ?></span>
                            <span class="post__comments-quantity">
                                <?php
                                    $quantity = get_comments_quantity ($_GET['id']);
                                    if ($quantity == 0)
                                        echo 'No comments';
                                    else 
                                        echo $quantity . ' comments'
                                ?>
                            </span>

                            <?php 
                                $id_user = add_userID($_COOKIE['login']);
                                if($_COOKIE['login'] != '' && $post["id_user"] == $id_user): 
                            ?>

                            <span class="post__modify">
                                <a class="delete_post" id="<?=$_GET['id']?>" href="#" title="Delete post"
                                    onclick="return confirm('Do you want to delete?')"><i
                                        class="far fa-trash-alt delete"></i></a>
                                <a class="<?=$_GET['id']?>" id="edit_post" href="update_post.php?id=<?=$_GET['id']?>"
                                    title="Edit post"><i class="far fa-edit edit"></i></a>
                            </span>

                            <?php endif; ?>

                            <div class="post__category">Posted in <a
                                    href="category.php?id=<?=$category["id_category"];?>"><?=$category["name"]; ?></a>
                            </div>
                        </div>

                        <img class="img-fluid mb-4" src="assets/img/posts/<?=$post['photo'];?>" alt="Sample img">

                        <div class="post__text">
                            <?=$post["text"]; ?>
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