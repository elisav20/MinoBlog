<?
    $website_title = 'Categories';
    include_once 'blocks/header.php';
?>

<!-- content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </nav>

                <ul class="list-group list-group-flush">
                    <?php 
                        $categories = get_categories ();
                        foreach ($categories as $category):
                        $count_posts = get_count_category_posts ($category["id_category"]);
                    ?>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a class="text-dark font-weight-bold" href="category.php?id=<?=$category["id_category"];?>">
                            <?=$category["name"]; ?></a>
                        <span class="badge badge-primary badge-pill">
                            <?php
                                if ($count_posts == 0)
                                    echo '0';
                                else
                                    echo $count_posts;
                            ?>
                        </span>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <!-- /.posts -->

            <?php include_once 'blocks/aside.php';?>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>
<!-- /.content -->

<?php include_once 'blocks/footer.php'; ?>