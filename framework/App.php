<?php
declare(strict_types=1);

namespace Framework;


use Exception;
use Framework\Controller\ControllerFactory;
use Framework\Router\UrlMatcher;


class App
{
    private UrlMatcher $urlMatcher;
    private ControllerFactory $factory;

    public function __construct(
        UrlMatcher        $urlMatcher,
        ControllerFactory $factory
    )
    {
        $this->urlMatcher = $urlMatcher;
        $this->factory = $factory;
    }

    public function bootstrap()
    {
        try {
            $route = $this->urlMatcher->match($_SERVER['REQUEST_URI']);

            $controller = $this->factory->createController($route->controller_namespace);
            $controller->render();

        } catch (Exception $e) {
            echo $e;
        }
    }
}