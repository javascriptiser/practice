<?php
declare(strict_types=1);

namespace Framework;


use Exception;
use Framework\AbstractFactory\Factory;
use Framework\Controller\ControllerInterface;
use Framework\Router\UrlMatcher;
use Framework\View\ViewInterface;
use Practice\Views\DefaultView;


class App
{
    private UrlMatcher $urlMatcher;
    private Factory $factory;

    public function __construct(
        UrlMatcher      $urlMatcher,
        Factory $factory
    )
    {
        $this->urlMatcher = $urlMatcher;
        $this->factory = $factory;

    }

    public function bootstrap()
    {
        try {
            $route = $this->urlMatcher->match($_SERVER['REQUEST_URI']);

            $view = $this->factory->createViewFactory(DefaultView::class,
                ViewInterface::class);

            $controller = $this->factory->createControllerFactory($route->controller_namespace,
                ControllerInterface::class);

            $controller->render($view);

        } catch (Exception $e) {
            echo $e;
        }
    }
}