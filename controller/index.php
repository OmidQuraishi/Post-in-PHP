<?php

$posts = $db->query('SELECT * FROM posts')->fetchAll();

require '../view/index.view.php';
