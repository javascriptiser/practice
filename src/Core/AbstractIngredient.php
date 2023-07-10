<?php
declare(strict_types=1);

namespace Practice\Core;

use JsonSerializable;

abstract class AbstractIngredient implements JsonSerializable
{
    public string $name;

    public function jsonSerialize(): string
    {
        return $this->name;
    }

}