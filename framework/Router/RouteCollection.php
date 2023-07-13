<?php
declare(strict_types=1);

namespace Framework\Router;

class RouteCollection
{
    /**
     * @var array<string,Route[]>
     */
    private array $routes;

    public function addRoute(string $name, Route $route): RouteCollection
    {
        $this->routes[$name] = $route;
        return $this;
    }

    /**
     * @return array<string,Route[]>
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }
}