<?php

require('functions.php');
require('Database.php');
$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];
$query = 'SELECT * from posts where id = :id';

$post = $db->query($query, ['id' => $id])->fetch();


echo $post['title'];


require('router.php');
