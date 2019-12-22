<?php 
    $posts = get_all_posts ();
?>

<div class="row">
    <div class="card w-100">
        <h3>Blog posts</h3>
        <div class="statusMsg"></div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Edit</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Date</th>
                    <th scope="col">Author</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($posts as $post): 
                    $author = get_author ($post["id_user"]);
                    $category = get_category ($post["id_category"]);
                ?>
                <tr>
                    <td scope="row">
                        <a href="?module=posts&action=update&id=<?=$post["id"]?>"><i
                                class="far fa-edit fa-2x mr-2"></i></a>
                        <a class="delete_post text-danger" id="<?=$post["id"]?>" href="#" title="Delete post"
                            onclick="return confirm('Do you want to delete?')"><i
                                class="far fa-trash-alt fa-2x"></i></a>
                    </td>
                    <td>
                        <img style="width: 200px" class="img-fluid" src="../assets/img/posts/<?=$post['photo']?>"
                            alt="Sample image">
                    </td>
                    <td>
                        <a class="post__title"
                            href="?module=posts&action=post&id=<?=$post["id"]?>"><?=$post["title"]?></a>
                    </td>
                    <td class="post__category"><?=$category["name"];?></td>
                    <td class="post__date"><?=date("F j, Y",strtotime($post["date"]));?></td>
                    <td class="post__author"><?=$author["firstname"] . ' ' . $author["lastname"]?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>