<?php


$Post = $db->query('SELECT * FROM posts WHERE id = :id', [
    ':id' => $_REQUEST['id'],
])->fetch();


require '../view/show.view.php';
