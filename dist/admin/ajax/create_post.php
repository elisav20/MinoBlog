<?php 
include_once '../db.php';
$uploadDir = '../assets/img/'; 
$response = array( 
    'status' => 0, 
    'message' => 'Add post failed, please try again.' 
); 
 
if(isset($_POST['post_title']) || isset($_POST['post_text'])){ 

    $title = $_POST['post_title']; 
    $text = $_POST['post_text'];
    $date = time();
    $id_category = add_categoryID($_POST['category_name']);
    $id_user = add_userID($_COOKIE['login']);
     
    if(!empty($title) && !empty($text)){ 
        if(strlen($title) <= 3){ 
            $response['message'] = 'The title must be more than three characters'; 
            
        } else if (!isset($_POST['category_name'])){ 
            $response['message'] = 'Select category'; 
        }
         else if (strlen($text) <= 20){ 
            $response['message'] = 'The text must be more than twenty characters'; 
        } 
        else if (empty($_FILES['post_photo'])){ 
            $response['message'] = 'Select category'; 
        } 
        else{ 
            $uploadStatus = 1; 
             
            $uploadedFile = ''; 
            if(!empty($_FILES["post_photo"]["name"])){ 
                 
                $fileName = microtime() . '.' . basename($_FILES["post_photo"]["name"]); 
                $targetFilePath = $uploadDir . $fileName; 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                 
                $allowTypes = array('jpg', 'jpeg'); 
                if(in_array($fileType, $allowTypes)){ 

                    if(move_uploaded_file($_FILES["post_photo"]["tmp_name"], $targetFilePath)){ 
                        $uploadedFile = $fileName; 
                    }else{ 
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, there was an error uploading your file.'; 
                    } 
                }else{ 
                    $uploadStatus = 0; 
                    $response['message'] = 'Sorry, only JPG & JPEG files are allowed to upload.';
                } 
            }
             
            if($uploadStatus == 1){  

                $sql = 'INSERT INTO posts(title, photo, text, date, id_category, id_user) VALUES(?, ?, ?, ?, ?, ?)';
                $query = $pdo->prepare($sql);
                $query->execute([$title, $uploadedFile, $text, $date, $id_category, $id_user]);
                 
                if($query){ 
                    $response['status'] = 1; 
                    $response['message'] = 'Post add successfully!'; 
                } 
            } 
        } 
    }else{ 
         $response['message'] = 'Please fill all the mandatory fields (title and text).'; 
    } 
} 
 
echo json_encode($response);