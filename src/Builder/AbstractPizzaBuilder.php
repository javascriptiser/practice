<?php
declare(strict_types=1);

namespace Practice\Builder;

use Practice\Core\AbstractBaseCheese;
use Practice\Core\AbstractCrust;
use Practice\Core\AbstractPizza;
use Practice\Core\AbstractSauce;

abstract class AbstractPizzaBuilder
{
    protected AbstractPizza $pizza;

    public function __construct(AbstractPizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function setCrust(AbstractCrust $crust): self
    {
        $this->pizza->crust = $crust;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->pizza->name = $name;
        return $this;
    }

    public function setSauce(AbstractSauce $sauce): self
    {
        $this->pizza->sauce = $sauce;
        return $this;
    }

    public function setBaseCheese(AbstractBaseCheese $baseCheese): self
    {
        $this->pizza->baseCheese = $baseCheese;
        return $this;
    }

    public function getResult(): AbstractPizza
    {
        return $this->pizza;
    }
}
