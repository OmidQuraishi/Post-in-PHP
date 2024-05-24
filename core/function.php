<?php



function dd($code)
{
    echo "<pre style='color:green;background-color:black;padding:10px;font-weight:900;font-size:15px'>";
    var_dump($code);
    echo "</pre>";
    die();
}

function isActive($url)
{
    return $url == parse_url($_SERVER['REQUEST_URI'])['path'] ? 'active' : '';
}
