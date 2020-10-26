<?php

use App\Framework\Application\ServiceProviders\RouteServiceProvider;

return [
    'name' => 'MVC',
    'debug' => true,

    'providers' => [
        RouteServiceProvider::class,
    ],

];
