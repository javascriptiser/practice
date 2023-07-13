<?php
declare(strict_types=1);

namespace Framework\View;

abstract class View implements ViewInterface
{
    protected string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function renderView()
    {
       echo $this->message;
    }
}