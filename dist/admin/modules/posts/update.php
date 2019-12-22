<?php
    $uploadDir = '../assets/img/posts/';
    $update_post = get_post($_GET['id']);
    $url_photo = '../assets/img/posts/' . $update_post['photo']; 
 
    if(!empty($_POST['post_title']) && !empty($_POST['post_text'])){ 

        $title = trim(filter_var($_POST['post_title'], FILTER_SANITIZE_STRING)); 
        $text = trim($_POST['post_text']);
        $id_category = add_categoryID($_POST['category_name']);
        $id_user = add_userID($_COOKIE['login']);
        
        if(strlen($title) <= 3){ 
            $msg = 'The title must be more than three characters'; 
            $msgClass = 'danger';
            
        } else if (strlen($text) <= 20){ 
            $msg = 'The text must be more than twenty characters'; 
            $msgClass = 'danger'; 
        } else{ 
            $uploadStatus = 1;
        }
    } 
                
    $uploadedFile = $update_post['photo']; 

    if (!empty ($_FILES["post_photo"]["name"])) {
        $fileName = microtime() . '.' . basename($_FILES["post_photo"]["name"]);
        $targetFilePath = $uploadDir . $fileName; 
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            
        $allowTypes = array('jpg', 'jpeg'); 
        if(in_array($fileType, $allowTypes)){ 
            $uploadedFile = $fileName; 
        }else{ 
            $msg = 'Sorry, only JPG & JPEG files are allowed to upload.';
            $msgClass = 'danger';
        } 
    }

    if($uploadStatus == 1){  

        $sql = 'UPDATE posts 
                SET `title`=?, `photo`=?, `text`=?, `id_category`=?, `id_user`=?
                WHERE id=?';
        $query = $pdo->prepare($sql);
        $query->execute([$title, $uploadedFile, $text, $id_category, $id_user, $_GET['id']]);
            
        if($query){ 
            if (!empty($_FILES["post_photo"]["name"])) {
                unlink($url_photo);
            }
            move_uploaded_file($_FILES["post_photo"]["tmp_name"], $targetFilePath);

            $msg = 'Post updated success!'; 
            $msgClass = 'success';
        } 
    }  

    $post = get_post($_GET['id']);
    $category = get_category ($post["id_category"]);
    $author = get_author ($post["id_user"]);
?>

<div class="container">
    <div class="row pt-3">
        <div class="col-12">

            <?php
                if (!$_SESSION['isAdmin']):
            ?>

            <h1 class="text-center mb-3 vh-100">Please Sign In</h1>

            <?php
                else:
            ?>

            <h1 class="text-center mb-3">Update post</h1>

            <div class="alert alert-<?=$msgClass;?>" role="alert">
                <?=$msg;?>
            </div>

            <form method="POST" id="post_info1" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" id="post_title" name="post_title"
                        value="<?=$post["title"]?>" />
                </div>

                <div class="form-group">
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="post_photo" name="post_photo">
                        <label class="custom-file-label" for="customFile">Post photo...</label>
                    </div>
                    <img src="../assets/img/posts/<?=$post["photo"]?>" alt="thumbnail"
                        class="img-fluid img-thumbnail mb-3" style="width: 400px">
                </div>

                <div class="form-group">
                    <select class="browser-default custom-select" name="category_name">
                        <option disabled>Select Category</option>

                        <?php 
                            $categories = get_categories ();
                            foreach ($categories as $category):
                        ?>
                        <option <?php if ($category["id_category"] == $post["id_category"]) {echo 'selected';}?>
                            value="<?=$category["name"]; ?>"><?=$category["name"]; ?></option>

                        <?php endforeach; ?>
                    </select>
                </div>


                <div class="toolbar">
                    <a href="#" data-command='undo'><i class='fa fa-undo'></i></a>
                    <a href="#" data-command='redo'><i class='fa fa-repeat'></i></a>
                    <a href="#" data-command='bold'><i class='fa fa-bold'></i></a>
                    <a href="#" data-command='italic'><i class='fa fa-italic'></i></a>
                    <a href="#" data-command='underline'><i class='fa fa-underline'></i></a>
                    <a href="#" data-command='strikeThrough'><i class='fa fa-strikethrough'></i></a>
                    <a href="#" data-command='justifyLeft'><i class='fa fa-align-left'></i></a>
                    <a href="#" data-command='justifyCenter'><i class='fa fa-align-center'></i></a>
                    <a href="#" data-command='justifyRight'><i class='fa fa-align-right'></i></a>
                    <a href="#" data-command='justifyFull'><i class='fa fa-align-justify'></i></a>
                    <a href="#" data-command='indent'><i class='fa fa-indent'></i></a>
                    <a href="#" data-command='outdent'><i class='fa fa-outdent'></i></a>
                    <a href="#" data-command='insertUnorderedList'><i class='fa fa-list-ul'></i></a>
                    <a href="#" data-command='insertOrderedList'><i class='fa fa-list-ol'></i></a>
                    <a href="#" data-command='h1'>H1</a>
                    <a href="#" data-command='h2'>H2</a>
                    <a href="#" data-command='createlink'><i class='fa fa-link'></i></a>
                    <a href="#" data-command='unlink'><i class='fa fa-unlink'></i></a>
                    <a href="#" class="font-weight-bold" data-command='p'>P</a>
                    <a href="#" data-command='subscript'><i class='fa fa-subscript'></i></a>
                    <a href="#" data-command='superscript'><i class='fa fa-superscript'></i></a>
                </div>
                <div id='editor' contenteditable=true data-text="Enter text here...">
                    <?=$post["text"]?>
                </div>
                <textarea name="post_text" id="post_text" required="required" class="d-none">asaasas</textarea>

                <div class="form-group text-center">
                    <input type="submit" class="btn btn-default updateBtn" id="update_post" value="Update">
                </div>

            </form>
            <?php
                endif;
            ?>
        </div>
    </div>
</div>

<?php
    include 'blocks/footer.php';
?>