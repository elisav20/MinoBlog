<?php 
    $id_admin = add_userID($username);
    $admin_posts = get_admin_posts ($id_admin);
    $posts_count = count_posts ();
    $categories_count = get_count_categories ();
    $users_count = get_count_users ();
?>

<div class="row mb-5">
    <div class="col-4">
        <div class="card">
            <h3 class="card__title">Blog Posts</h3>
            <div class="card__info"><?=$posts_count?></div>
            <div class="card__icon card__icon-posts">
                <i class="fas fa-file-alt"></i>
            </div>
            <a class="card__link" href="?module=posts&action=read">
                <i class="fas fa-arrow-right mr-2"></i>See all
            </a>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <h3 class="card__title">Blog Categories</h3>
            <div class="card__info"><?=$categories_count?></div>
            <div class="card__icon card__icon-categories">
                <i class="fas fa-list-ul"></i>
            </div>
            <a class="card__link" href="?module=categories&action=read">
                <i class="fas fa-arrow-right mr-2"></i>See all
            </a>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <h3 class="card__title">Blog Users</h3>
            <div class="card__info"><?=$users_count?></div>
            <div class="card__icon card__icon-users">
                <i class="fas fa-users"></i>
            </div>
            <a class="card__link" href="?module=users&action=read">
                <i class="fas fa-arrow-right mr-2"></i>See all
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="card w-100">
        <h3>Your recent blog posts</h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Edit</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($admin_posts as $admin_post): 
                    $category = get_category ($admin_post["id_category"]);
                ?>
                <tr>
                    <td scope="row">
                        <a href="?module=posts&action=update&id=<?=$admin_post["id"]?>"><i
                                class="far fa-edit fa-2x"></i></a>
                    </td>
                    <td>
                        <img style="width: 200px" class="img-fluid" src="../assets/img/posts/<?=$admin_post['photo']?>"
                            alt="Sample image">
                    </td>
                    <td>
                        <a class="post__title"
                            href="?module=posts&action=post&id=<?=$admin_post["id"]?>"><?=$admin_post["title"]?></a>
                    </td>
                    <td class="post__category"><?=$category["name"];?></td>
                    <td class="post__date"><?=date("F j, Y",strtotime($admin_post["date"]));?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>