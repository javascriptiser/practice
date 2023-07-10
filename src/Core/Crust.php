<?php
declare(strict_types=1);

namespace Practice\Core;

class Crust extends AbstractCrust
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}