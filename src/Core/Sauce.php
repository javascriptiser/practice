<?php
declare(strict_types=1);

namespace Practice\Core;

class Sauce extends AbstractSauce
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}