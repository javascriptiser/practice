<?php
declare(strict_types=1);

namespace Practice\Core;

class Pizza extends AbstractPizza
{
    /**
     * @var AbstractIngredient[]
     */
    public array $ingredients = [];

    public function jsonSerialize(): array
    {
        $parentJson = parent::jsonSerialize();

        $parentJson['pizza']['ingredients'] = $this->ingredients;

        return $parentJson;
    }

}