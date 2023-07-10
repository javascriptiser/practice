<?php
declare(strict_types=1);

namespace Practice\Core;

class FreePizza extends Pizza
{
    public int $cost = 100500;

    public function jsonSerialize(): array
    {
        $parentJson = parent::jsonSerialize();

        $parentJson['pizza']['cost'] = $this->cost;

        return $parentJson;
    }
}