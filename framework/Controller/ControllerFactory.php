<?php
declare(strict_types=1);


namespace Framework\Controller;


use Framework\Exceptions\Exception;
use ReflectionClass;
use ReflectionException;

class ControllerFactory implements ControllerFactoryInterface
{


    /**
     * @throws ReflectionException
     * @throws Exception
     */
    public function createController(string $controllerClass): AbstractControllerInterface
    {
        $reflectionClass = new ReflectionClass($controllerClass);
        if ($reflectionClass->implementsInterface(AbstractControllerInterface::class)) {
            return $reflectionClass->newInstance();
        } else {
            throw new Exception("Controller class must implement ControllerInterface: $controllerClass");
        }
    }
}