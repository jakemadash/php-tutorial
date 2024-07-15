<?php

require('functions.php');
require('Database.php');

$db = new Database();

$posts = $db->query('SELECT * from posts')->fetchAll(PDO::FETCH_ASSOC);;

foreach ($posts as $post) {
    echo $post['title'];
}

require('router.php');
