<!-- .sidebar -->
<aside class="col-md-3 sidebar">

    <!-- .recent__posts -->
    <section class="recent__posts">

        <h4>Recent posts</h4>


        <?php 
            $recent_posts = get_recent_posts ();
            foreach ($recent_posts as $recent_post):
        ?>
        <div class="recent__post-info">
            <a class="recent__post-title" href="post.php?id=<?=$recent_post["id"]; ?>"><?=$recent_post["title"]; ?></a>
            <div class="recent__post-date"><?=date("F j, Y",strtotime($recent_post["date"])); ?></div>
        </div>
        <?php endforeach; ?>



    </section>

    <!-- .category -->
    <section class="category">
        <h4>Category</h4>
        <?php 
            $categories = get_categories ();
            foreach ($categories as $category):
        ?>

        <div class="category__info">
            <a class="category__name" href="category.php?id=<?=$category["id_category"];?>">
                <?=$category["name"]; ?></a>
        </div>

        <?php endforeach; ?>
    </section>
    </div>

</aside>
<!-- /.sidebar -->