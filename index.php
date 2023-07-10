<?php
declare(strict_types=1);

use Practice\Builder\PizzaBuilder;
use Practice\Core\FreePizza;
use Practice\Factory\PizzaFactory;

require_once __DIR__ . '/vendor/autoload.php';

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



echo json_encode($pizza);
$fact = 5;