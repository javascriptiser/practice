<?php
declare(strict_types=1);

namespace Practice\Core;

class Ingredient extends AbstractIngredient
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}