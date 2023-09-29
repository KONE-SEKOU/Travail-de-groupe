<?php

require_once '../controllers/BaseController.php';
require_once '../controllers/HomeController.php';
require_once '../controllers/CarController.php';
require_once '../controllers/NotFoundController.php';
require_once '../controllers/UserController.php';
// Load routes
require_once '../config/routes.php';

// parse the request URL
$requestUri = $_SERVER['REQUEST_URI'];
$path = parse_url($requestUri, PHP_URL_PATH);
$path = ltrim($path, '/');
$uriSegments = explode('/', $path);

$page = $uriSegments[0];

// Dispatch the request

if (array_key_exists($page, $routes)) {
    $controllerName = $routes[$page]['controller'];
    $action = $routes[$page]['action'];

    $controller = new $controllerName();
    $controller->$action();
    //$parameters = ["dd"];
    //call_user_func_array([$controller, $parameters]);
} else {

   $controller = new NotFoundController();
   $controller->index();
}

