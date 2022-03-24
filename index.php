<?php
require_once 'vendor/autoload.php';

$request = $_SERVER['REQUEST_URI'];

switch (substr($request, 4, strlen($request)-4 )) {
    case '/' :
        require __DIR__ . '/views/home.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
    case '/about' :
        require __DIR__ . '/views/about.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
