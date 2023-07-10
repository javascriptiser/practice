<?php
declare(strict_types=1);

namespace Practice\Core;

class BaseCheese extends AbstractBaseCheese
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}