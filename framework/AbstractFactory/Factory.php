<?php
declare(strict_types=1);

namespace Framework\AbstractFactory;

use Framework\Controller\ControllerInterface;
use Framework\View\ViewInterface;
use ReflectionClass;
use ReflectionException;

class Factory
{

    /**
     * @throws ReflectionException
     */
    public function isImplementedBy(string $class, string $interface): bool
    {
        $reflectionClass = new ReflectionClass($class);
        if ($reflectionClass->implementsInterface($interface)) {
            return true;
        }
        throw new ReflectionException("Controller class must implement ControllerInterface: $class");
    }

    /**
     * @throws ReflectionException
     */
    public function createViewFactory(string $view,
                                      string $interface): ViewInterface
    {
        if ($this->isImplementedBy($view, $interface)) {
            return (new ReflectionClass($view))->newInstance("Default message");
        }
        throw new ReflectionException("View class must implement ViewInterface: $view");
    }

    /**
     * @throws ReflectionException
     */
    public function createControllerFactory(string $controller,
                                            string $interface): ControllerInterface
    {
        if ($this->isImplementedBy($controller, $interface)) {
            return (new ReflectionClass($controller))->newInstance();
        }
        throw new ReflectionException("Controller class must implement ControllerInterface: $controller");
    }
}