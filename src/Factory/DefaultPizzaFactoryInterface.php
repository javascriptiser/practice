<?php
declare(strict_types=1);

namespace Practice\Factory;


use Practice\Core\AbstractBaseCheese;
use Practice\Core\AbstractCrust;
use Practice\Core\AbstractSauce;

interface DefaultPizzaFactoryInterface
{
    public function createCrust(string $name): AbstractCrust;
    public function createSauce(string $name): AbstractSauce;
    public function createBaseCheese(string $name): AbstractBaseCheese;
}