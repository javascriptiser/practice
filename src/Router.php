<?php
declare(strict_types=1);

namespace Practice;

use Practice\Builder\PizzaBuilder;
use Practice\Core\FreePizza;
use Practice\Factory\PizzaFactory;

class Router
{
    public static function start(string $uri)
    {
        header("Content-Type: application/json; charset=UTF-8");

        switch ($uri) {
            case '/' :
            {
                $factory = new PizzaFactory();
                $builder = new PizzaBuilder(new FreePizza());

                $pizza = $builder->setName("Name_1")
                    ->setCrust($factory->createCrust("Crust_1"))
                    ->setSauce($factory->createSauce("Sauce_1"))
                    ->setBaseCheese($factory->createBaseCheese("BaseCheese_1"))
                    ->addIngredient($factory->createIngredient("Ingredient_1"))
                    ->addIngredient($factory->createIngredient("Ingredient_2"))
                    ->addIngredient($factory->createIngredient("Ingredient_3"))
                    ->getResult();

                return json_encode($pizza);
            }
            default:
                header("HTTP/1.1 404 Not Found");
                exit();
        }
    }
}