<?php
session_start();
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/contact/contact.controller.php',
];

if (array_key_exists($uri, $routes)) {
    require 'layouts/head.php';
    require $routes[$uri];
    require 'layouts/footer.php';
} else {
   http_response_code(404);
   require 'views/errors/404.php';
   die();
}

