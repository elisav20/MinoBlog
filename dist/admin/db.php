<?php
    $user = 'root';
    $password = '';
    $db = 'minoblog';
    $host = 'localhost';

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);
?>