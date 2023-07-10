<?php
declare(strict_types=1);

namespace Practice\Factory;


use Practice\Core\AbstractIngredient;


interface PizzaFactoryInterface extends DefaultPizzaFactoryInterface
{
    public function createIngredient(string $name): AbstractIngredient;
}