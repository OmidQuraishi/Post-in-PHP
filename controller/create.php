
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userid = 1;

    $db->query('INSERT INTO posts (title,description,user_id) VALUES (:title, :description,:id)', [
        ':title' => $_POST['title'],
        ':description' => $_POST['description'],
        ':id' => $userid,
    ]);
    header('location:/');
    exit;
}

require '../view/create.view.php';
