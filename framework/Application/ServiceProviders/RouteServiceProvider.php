<?php


namespace App\Framework\Application\ServiceProviders;


use League\Route\Router;

class RouteServiceProvider extends ServiceProvider
{

    /** @var Router */
    protected $router;
    protected $response;

    function register() {
        $this->router = new Router;
        $this->registerRoutes();
    }

    function boot() {
        $request = $this->app->request();
        $this->response = $this->router->dispatch($request);
    }

    function registerRoutes() {
        $this->router->group('', function ($router) {
            require_once path('routes/web.php');
        });
    }

    function router() {
        return $this->router;
    }

    function response() {
        return $this->response;
    }

}
