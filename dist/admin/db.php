<?php
    $user = 'root';
    $password = '';
    $db = 'minoblog';
    $host = 'localhost';

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);


    function add_categoryID ($category_name) {
        global $pdo;
        $sql = 'SELECT * 
                FROM categories 
                WHERE `name` = :name';
                
        $query = $pdo->prepare($sql);
        $query->execute(['name' => $category_name]);

        $category = $query->fetch(PDO::FETCH_OBJ);

        return $category->id_category;
    }

    function add_userID ($user_name) {
        global $pdo;
        $sql = 'SELECT * 
                FROM users 
                WHERE `username` = :username';

        $query = $pdo->prepare($sql);
        $query->execute(['username' => $user_name]);

        $user = $query->fetch(PDO::FETCH_OBJ);

        return $user->id;
    }

    function get_all_posts () {
        global $pdo;
        $posts = $pdo->query("SELECT * 
                                FROM posts
                                ORDER BY date DESC");

        return $posts;
    }

     function get_post ($id) {
        global $pdo;
        $sql = 'SELECT *
                FROM posts
                WHERE id = :id';
        
        $query = $pdo->prepare($sql);
        $query->execute(['id' => $id]);

        $post = $query->fetch(PDO::FETCH_ASSOC);
        
        return $post;
    }

    function get_recent_posts () {
        global $pdo;
        $recent_posts = $pdo->query("SELECT * 
                                        FROM posts
                                        ORDER BY date DESC
                                        LIMIT 5");
        return $recent_posts;
    }

    function get_author ($id) {
        global $pdo;
        $authors = $pdo->query("SELECT firstname, lastname 
                                FROM users INNER JOIN posts
                                ON users.id = posts.id_user
                                WHERE posts.id_user = $id");

        foreach ($authors as $author) {
            return $author;
        }
    }

     function get_category ($id) {
        global $pdo;
        $sql = 'SELECT *
                FROM categories
                WHERE id_category = :id_category';
        
        $query = $pdo->prepare($sql);
        $query->execute(['id_category' => $id]);

        $category = $query->fetch(PDO::FETCH_ASSOC);
        return $category;
    }

    function get_categories () {
        global $pdo;
        $categories = $pdo->query("SELECT * 
                                    FROM categories");
        return $categories;
    }

    function get_comments_quantity ($id) {
        global $pdo;
        $sql = 'SELECT *
                FROM comments
                WHERE id_post = :id_post';
        $query = $pdo->prepare($sql);
        $query->execute(['id_post' => $id]);
        $quantity = $query->fetchAll(PDO::FETCH_ASSOC);
        return count($quantity);
    }

    function get_comments ($id) {
        global $pdo;
        $sql = 'SELECT *
                FROM comments
                WHERE id_post = :id_post
                ORDER BY date DESC';
        $query = $pdo->prepare($sql);
        $query->execute(['id_post' => $id]);
        $comments = $query->fetchAll(PDO::FETCH_ASSOC);
        return $comments;
    }
?>