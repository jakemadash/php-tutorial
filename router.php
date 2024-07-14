<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = ['/' => 'controllers/index.php', '/about' => 'controllers/about.php'];

function routeToController($routes, $uri)
{
    if (array_key_exists($uri, $routes)) {
        require($routes[$uri]);
    } else {
        abort();
    }
}

function abort($value = 404)
{
    http_response_code(404);
    require("views/$value.php");
    die();
}

routeToController($routes, $uri);
