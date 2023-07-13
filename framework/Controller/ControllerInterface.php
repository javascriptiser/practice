<?php
declare(strict_types=1);

namespace Framework\Controller;

use Framework\View\ViewInterface;

interface ControllerInterface
{
    public function render(ViewInterface $view);
}