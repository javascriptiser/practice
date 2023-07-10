<?php
declare(strict_types=1);

namespace Practice\Core;

use JsonSerializable;

abstract class AbstractPizza implements JsonSerializable
{
    public AbstractCrust $crust;
    public string $name;
    public AbstractSauce $sauce;
    public AbstractBaseCheese $baseCheese;

    public function jsonSerialize(): array
    {
        return [
            "pizza"=>[
                "name"=>$this->name,
                "sauce"=>$this->sauce,
                "crust"=>$this->crust,
                "baseCheese"=>$this->baseCheese
            ]
        ];
    }

}