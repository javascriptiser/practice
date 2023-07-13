<?php
declare(strict_types=1);

namespace Practice\Views;

use Framework\View\View;

class DefaultView extends View
{

    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}