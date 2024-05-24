<?php


$Post = $db->query('SELECT * FROM posts WHERE id = :id', [
    ':id' => $_REQUEST['id']
])->fetch();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $db->query('UPDATE posts SET title = :title , description = :description WHERE id = :id', [
        ':title' => $_REQUEST['title'],
        ':description' => $_REQUEST['description'],
        ':id' => $_REQUEST['id']

    ]);
    header('location:/show?id=' . $_REQUEST['id']);
    exit;
}


require '../view/update.view.php';
