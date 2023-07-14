<?php
declare(strict_types=1);


use Framework\AbstractFactory\Factory;
use Framework\App;
use Framework\Router\Route;
use Framework\Router\RouteCollection;
use Framework\Router\UrlMatcher;
use Practice\Controllers\FailController;
use Practice\Controllers\HomeController;
use Practice\Controllers\TestController;

require_once __DIR__ . '/vendor/autoload.php';


$home_route = new Route("/", HomeController::class);
$test_route = new Route("/test", TestController::class);
$fail_route = new Route("/fail", FailController::class);

$routes = new RouteCollection();
$routes->addRoute("home", $home_route)
    ->addRoute("test", $test_route)
    ->addRoute("fail", $fail_route);

$app = new App(
    new UrlMatcher($routes),
    new Factory()
);
$app->bootstrap();
