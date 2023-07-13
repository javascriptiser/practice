<?php
declare(strict_types=1);

namespace Framework\Router;


use Framework\Controller\Controller_404;

class UrlMatcher
{

    /**
     * @var Route[]
     */
    protected array $routes;

    public function __construct(RouteCollection $routes)
    {
        $this->routes = $routes->getRoutes();
    }

    public function match(string $uri): Route
    {
        foreach ($this->routes as $route) {
            if ($uri === $route->getPath()) {
                return $route;
            }
        }
        return new Route("", Controller_404::class);
    }
}