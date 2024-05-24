<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db->query('INSERT INTO users (name,email,password) VALUES(:name,:email,:password)', [
        ':name' => $_REQUEST['userName'],
        ':email' => $_REQUEST['email'],
        ':password' => md5($_REQUEST['password']),
    ]);
    header('location:/signup');
    exit;
}


require '../view/signup.view.php';
