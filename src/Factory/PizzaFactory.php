<?php
declare(strict_types=1);

namespace Practice\Factory;

use Practice\Core\AbstractIngredient;
use Practice\Core\Ingredient;

class PizzaFactory extends AbstractDefaultPizzaFactory implements PizzaFactoryInterface
{
    public function createIngredient(string $name): AbstractIngredient
    {
        return new Ingredient($name);
    }
}