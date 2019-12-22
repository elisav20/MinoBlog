<?php 
    $id_category = $_GET['id'];
    $id_other = get_category_other ();

    if ($id_category != '') {
        $sql = "DELETE FROM categories WHERE id_category =  :id_category";
        $query = $pdo->prepare($sql);
        $query->execute(['id_category' => $id_category]);
        if($query){
            $msg = 'Category deleted successfully!';
            $msgClass = 'success';

            $sql = 'UPDATE posts 
                    SET `id_category`= :new_id
                    WHERE `id_category`= :old_id';
            $query = $pdo->prepare($sql);
            $query->execute(['new_id' => $id_other, 'old_id' => $id_category]);
        } else {
            $msg = 'Error!';
            $msgClass = 'danger';
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
                        <a class="text-danger" href="?module=categories&action=read&id=<?=$category["id_category"]?>"
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

        <div class="text-center">
            <a href="?module=categories&action=create" class="btn btn-black rounded-pill">Add category</a></div>
    </div>