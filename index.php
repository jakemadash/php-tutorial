<?php

require('functions.php');

$dsn = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4';
$pdo = new PDO($dsn, 'root');
$statement = $pdo->prepare('SELECT * from posts');
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo $post['title'];
}

require('router.php');
