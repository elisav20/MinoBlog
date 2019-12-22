<?php 
    $users = get_users ();
    $msg ='';

    $user_id = $_GET['id'];

    if ($user_id != '') {
        $sql = "DELETE FROM users WHERE id =  :id";
        $query = $pdo->prepare($sql);
        $query->execute(['id' => $_GET['id']]);
        if($query){
            $msg = 'User deleted successfully!';
            $msgClass = 'success';

            $sql = "DELETE FROM posts WHERE id_user =  :id_user";
            $query = $pdo->prepare($sql);
            $query->execute(['id_user' => $_GET['id']]);
        } else {
            $msg = 'Error!';
            $msgClass = 'danger';
        }
    }
?>

<div class="row">
    <div class="card w-100">
        <h3>Blog users</h3>
        <div class="alert alert-<?=$msgClass?>" role="alert">
            <?=$msg;?>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Edit</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Count posts</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($users as $user): 
                    $count_posts = get_count_user_posts ($user["id"]);
                ?>
                <tr>
                    <td scope="row">
                        <?php if ($user['username'] != 'admin'): ?>
                        <a class="text-danger" href="?module=users&action=read&id=<?=$user["id"]?>" title="Delete user"
                            onclick="return confirm('Do you want to delete?')"><i
                                class="far fa-trash-alt fa-2x"></i></a>
                        <?php endif; ?>
                    </td>
                    <td><?=$user["firstname"]?></td>
                    <td><?=$user["lastname"]?></td>
                    <td><?=$user["username"]?></td>
                    <td><?=$count_posts?></td>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>