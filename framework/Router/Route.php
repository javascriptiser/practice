<?php
declare(strict_types=1);

namespace Framework\Router;

use Framework\Controller\Controller;

class Route
{
    private string $path;
    public string $controller_namespace;


    /**
     * @param string $path
     * @param class-string<Controller> $controller_namespace
     */
    public function __construct(string $path, string $controller_namespace)
    {
        $this->path = $path;
        $this->controller_namespace = $controller_namespace;
    }

    public function getPath(): string
    {
        return $this->path;
    }


}