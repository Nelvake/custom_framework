<?php

use App\Framework\Kernel\Application;
use Laminas\Diactoros\ServerRequestFactory;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;

require_once __DIR__ . "/../vendor/autoload.php";

$request = ServerRequestFactory::fromGlobals();

$response = Application::app($request)
    ->start();

(new SapiEmitter)->emit($response);
