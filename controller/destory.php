<?php

$db->query('DELETE FROM posts WHERE id = :id', [
    ':id' => $_REQUEST['id'],
]);

header('location:/');
exit;
