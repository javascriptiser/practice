<?php
declare(strict_types=1);

namespace Framework\Router;

class Route
{
    private string $path = '/';

    public string $controller_namespace;

    public function __construct(string $path, $controller_namespace)
    {
        $this->path = $path;
        $this->controller_namespace = $controller_namespace;
    }

    public function getPath(): string
    {
        return $this->path;
    }



}