<?php 
    if ($_POST['username'] != '' && $_POST['email'] != '' && $_POST['comment'] != '') {
        $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
        $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
        $comment = trim(filter_var($_POST['comment'], FILTER_SANITIZE_STRING));

        $sql = 'INSERT INTO comments(comment, id_post, username, email) VALUES(?, ?, ?, ?)';
        $query = $pdo->prepare($sql);
        $query->execute([$comment, $_GET['id'], $username, $email]);
    }
?>

<!-- .comments -->
<section class="comments">
    <?php 
        $quantity = get_comments_quantity ($_GET['id']);
    ?>
    <h1 class="comments__number">Comments <?=$quantity?></h1>

    <?php 
        $comments = get_comments ($_GET['id']);
        foreach ($comments as $commentary):
    ?>

    <div class="comment__content">
        <div class="comment__info">
            <span class="comment__icon">
                <i class="fas fa-user"></i>
            </span>
            <span class="comment__username"><?=$commentary["username"]?> </span>
            <span class="comment__dot">
                <i class="fas fa-circle"></i>
            </span>
            <span class="comment__date"><?=date("d.m.y H:i",strtotime($commentary["date"]));?></span>
        </div>

        <p class="comment__text"><?=$commentary["comment"]?></p>
    </div>

    <?php endforeach;?>

    <section class="my-5">
        <h1 class="comment__leave">Leave a Comment</h1>
        <p>Your email address will not be published. Required fields are marked</p>

        <form class="px-1 mt-4" action="" method="POST">

            <div class="md-form mt-5">
                <label for="username">Your name</label>
                <input type="text" id="username" name="username" class="form-control" value="<?=$_COOKIE['login']?>">
            </div>

            <div class="md-form mt-5">
                <label for="email">Your e-mail</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>

            <div class="md-form">
                <label for="comment">Your comment</label>
                <textarea class="form-control md-textarea" id="comment" name="comment" rows="4"></textarea>
            </div>

            <div class="text-center mt-4">
                <input class="btn btn-default" type="submit" id="add_comment" value="Post">
            </div>

        </form>

    </section>

</section>
<!-- /.comments -->