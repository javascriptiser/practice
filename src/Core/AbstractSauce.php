<?php
declare(strict_types=1);

namespace Practice\Core;

use JsonSerializable;

abstract class AbstractSauce implements JsonSerializable
{
    public string $name;

    public function jsonSerialize(): string
    {
        return $this->name;
    }
}