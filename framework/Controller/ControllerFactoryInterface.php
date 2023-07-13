<?php
declare(strict_types=1);

namespace Framework\Controller;

interface ControllerFactoryInterface
{
    public function createController(string $controllerClass);
}