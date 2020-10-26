<?php
//web.php

use League\Route\RouteGroup;
use Laminas\Diactoros\Response;
/**
 * @var RouteGroup $router
 */

$router->get('/', function () {
    $response = new Response();
    $response->getBody()->write('Hello from web.php!');
    return $response;
});
