<?php

require '../core/function.php';

spl_autoload_register(function ($class) {
    require __DIR__ . "/../core/$class.php";
});
$db = new Database();

$route = require '../routes/route.php';

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

if (array_key_exists($url, $route)) {
    require $route[$url];
}
