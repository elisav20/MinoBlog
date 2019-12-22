<?php
function search($text){
	
	$db = new PDO("mysql:host=localhost;dbname=minoblog", 'root', '');
	$text = htmlspecialchars($text);

	$get_title = $db->prepare("SELECT id, title FROM posts WHERE title LIKE concat('%', :title, '%')");

	$get_title -> execute(array('title' => $text));

	while($post = $get_title->fetch(PDO::FETCH_ASSOC)){
        echo '<a href="post.php?id=' .$post['id'] . '">'.$post['title'].'</a>';
	}
}
// call the search function with the data sent from Ajax
search($_GET['txt']);
?>