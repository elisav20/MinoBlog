<?php 
    $categoryName = trim(filter_var($_POST['category_name'], FILTER_SANITIZE_STRING));

    if (!empty ($categoryName)) {
        if (strlen($categoryName) < 3) {
            $msg = 'Incorrect Name!';
            $msgClass = 'danger';
        } else {
            $sql = 'INSERT INTO categories(name) VALUES(?)';
            $query = $pdo->prepare($sql);
            $query->execute([$categoryName]);

            if($query){
                $msg = 'Category add successfully!';
                $msgClass = 'success';
            } else {
                $msg = 'Error!';
                $msgClass = 'danger';
            }
        }
    }
?>

<div class="row">
    <div class="col-md-8 offset-2">
        <div class="alert alert-<?=$msgClass?>" role="alert">
            <?=$msg;?>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Edit</th>
                    <th scope="col">Name</th>
                    <th scope="col">Count posts</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $categories = get_categories ();
                    foreach ($categories as $category):
                    $count_posts = get_count_category_posts ($category["id_category"]);
                ?>
                <tr>
                    <th scope="row">
                        <?php if ($category['name'] != 'Other'): ?>
                        <a class="text-danger" href="?module=categories&action=read&id=<?=$category["id"]?>"
                            title="Delete category" onclick="return confirm('Do you want to delete?')"><i
                                class="far fa-trash-alt fa-2x"></i></a>
                        <?php endif; ?>
                    </th>
                    <td><?=$category["name"]?></td>
                    <td>
                        <span class="badge badge-primary badge-pill px-2">
                            <?php
                                if ($count_posts == 0)
                                    echo '0';
                                else
                                    echo $count_posts;
                            ?>
                        </span>
                    </td>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table>

        <form action="" method="POST" class="d-flex">
            <input type="text" id="category_name" name="category_name" class="form-control mr-3"
                placeholder="Category name...">
            <button type="submit"><i class="fas fa-plus text-success fa-2x"></i></button>
        </form>
    </div>