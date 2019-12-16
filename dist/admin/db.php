<?php
    $user = 'root';
    $password = '';
    $db = 'minoblog';
    $host = 'localhost';

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);


    function add_categoryID ($category_name) {
        global $pdo;
        $sql = 'SELECT * FROM categories WHERE `name` = :name';
        $query = $pdo->prepare($sql);
        $query->execute(['name' => $category_name]);

        $category = $query->fetch(PDO::FETCH_OBJ);

        return $category->id_category;
    }

    function add_userID ($user_name) {
        global $pdo;
        $sql = 'SELECT * FROM users WHERE `username` = :username';
        $query = $pdo->prepare($sql);
        $query->execute(['username' => $user_name]);

        $user = $query->fetch(PDO::FETCH_OBJ);

        return $user->id;
    }
?>