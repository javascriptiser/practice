<?php
declare(strict_types=1);

namespace Practice\Factory;

use Practice\Core\AbstractBaseCheese;
use Practice\Core\AbstractCrust;
use Practice\Core\AbstractSauce;
use Practice\Core\BaseCheese;
use Practice\Core\Crust;
use Practice\Core\Sauce;

abstract class AbstractDefaultPizzaFactory implements DefaultPizzaFactoryInterface
{
    public function createCrust(string $name): AbstractCrust
    {
        return new Crust($name);
    }

    public function createSauce(string $name): AbstractSauce
    {
        return new Sauce($name);
    }

    public function createBaseCheese(string $name): AbstractBaseCheese
    {
        return new BaseCheese($name);
    }
}