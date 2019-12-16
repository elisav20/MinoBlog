<?php
    $website_title = 'Home';
    include_once 'blocks/header.php';
    include_once 'blocks/intro.php';
?>


<!--content -->
<div class="content mt-4">
    <div class="container">
        <div class="row">

            <?php
                include_once 'blocks/posts.php';
                include_once 'blocks/aside.php'; 
            ?>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.content -->

<?php
    include_once 'blocks/footer.php';
?>