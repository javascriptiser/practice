<?php
declare(strict_types=1);

namespace Practice\Builder;

use Practice\Core\AbstractPizza;

class DefaultPizzaBuilder extends AbstractPizzaBuilder
{
    public function __construct(AbstractPizza $pizza)
    {
        parent::__construct($pizza);
    }
}
