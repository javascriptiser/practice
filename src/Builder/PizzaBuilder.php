<?php
declare(strict_types=1);

namespace Practice\Builder;

use Practice\Core\AbstractIngredient;
use Practice\Core\AbstractPizza;

class PizzaBuilder extends DefaultPizzaBuilder
{
    /**
     * @var AbstractIngredient[]
     */
    protected array $ingredients = [];

    public function addIngredient(AbstractIngredient $ingredient): self
    {
        $this->ingredients[] = $ingredient;
        return $this;
    }

    public function getResult(): AbstractPizza
    {
        $this->pizza->ingredients = $this->ingredients;
        $result = parent::getResult();
        $this->ingredients = []; // Сбрасываем список ингредиентов
        return $result;
    }
}
