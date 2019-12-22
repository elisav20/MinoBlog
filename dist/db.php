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

    function get_count_users () {
        global $pdo;
        $sql = 'SELECT *
                FROM users';

        $query = $pdo->prepare($sql);
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_ASSOC);
        return count($users);
    }

    function get_all_posts () {
        global $pdo;
        $posts = $pdo->query("SELECT * 
                                FROM posts
                                ORDER BY date DESC");

        return $posts;
    }
    
    function get_id_posts () {
        global $pdo;
        $id_posts = $pdo->query("SELECT id
                                FROM posts");
    foreach ($id_posts as $id_post) {
        return $id_post;
    }
        
    }

    function count_posts () {
        global $pdo;
        $sql = 'SELECT *
                FROM posts';
        $query = $pdo->prepare($sql);
        $query->execute();
        $count = $query->fetchAll(PDO::FETCH_ASSOC);
        return count($count);
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

    function get_users () {
        global $pdo;
        $users = $pdo->query("SELECT * 
                                FROM users");

        return $users;
    }

    function get_user_posts ($id) {
        global $pdo;
        $user_posts = $pdo->query("SELECT * 
                                        FROM posts
                                        WHERE id_user = $id
                                        ORDER BY date DESC");
        return $user_posts;
    }

    function get_admin_posts ($id) {
        global $pdo;
        $admin_posts = $pdo->query("SELECT * 
                                        FROM posts
                                        WHERE id_user = $id
                                        ORDER BY date DESC
                                        LIMIT 5");
        return $admin_posts;
    }

    function get_count_user_posts ($id) {
        global $pdo;
        $sql = 'SELECT *
                FROM posts
                WHERE id_user = :id_user';
        $query = $pdo->prepare($sql);
        $query->execute(['id_user' => $id]);
        $posts_count = $query->fetchAll(PDO::FETCH_ASSOC);
        return count($posts_count);
    }

    function get_posts_byCategory ($id) {
        global $pdo;
        $category_posts = $pdo->query("SELECT * 
                                        FROM posts
                                        WHERE id_category = $id
                                        ORDER BY date DESC");
        return $category_posts;
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

    function get_author_byID ($id) {
        global $pdo;
        $sql = 'SELECT firstname, lastname 
                FROM users
                WHERE id = :id';
        $query = $pdo->prepare($sql);
        $query->execute(['id' => $id]);

        $authors = $query->fetchAll(PDO::FETCH_ASSOC);
        
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

    function get_count_category_posts ($id) {
        global $pdo;
        $sql = 'SELECT *
                FROM posts
                WHERE id_category = :id_category';
        $query = $pdo->prepare($sql);
        $query->execute(['id_category' => $id]);
        $posts = $query->fetchAll(PDO::FETCH_ASSOC);
        return count($posts);
    }

    function get_count_categories () {
        global $pdo;
        $sql = 'SELECT *
                FROM categories';

        $query = $pdo->prepare($sql);
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_ASSOC);
        return count($categories);
    }

    function get_category_other () {
        global $pdo;
        $name = 'Other';
        global $pdo;
        $sql = 'SELECT * 
                FROM categories 
                WHERE `name` = :name';

        $query = $pdo->prepare($sql);
        $query->execute(['name' => $name]);

        $category = $query->fetch(PDO::FETCH_OBJ);

        return $category->id_category;
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