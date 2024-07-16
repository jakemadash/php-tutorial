<?php

require('functions.php');
require('Database.php');
$config = require('config.php');

$db = new Database($config['database']);

$posts = $db->query('SELECT * from posts')->fetchAll();;

foreach ($posts as $post) {
    echo $post['title'];
}

require('router.php');
