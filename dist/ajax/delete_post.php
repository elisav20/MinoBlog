<?php
    include '../db.php';
    $id = $_POST['del_id'];
    $post = get_post ($id);
    $response = array( 
        'status' => 0, 
        'message' => 'Error to delete!' 
    );

    $url_photo = '../assets/img/posts/' . $post['photo'];

    $sql = "DELETE FROM posts WHERE id =  :id";
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);
    if($query){
        unlink($url_photo);

        $sql = "DELETE FROM comments WHERE id_post =  :id_post";
        $query = $pdo->prepare($sql);
        $query->execute(['id_post' => $id]);
        
        $response['status'] = 1; 
        $response['message'] = 'Post deleted successfully! Go to your profile.';
    }

    echo json_encode($response);
?>