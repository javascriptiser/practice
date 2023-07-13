<?php
declare(strict_types=1);

namespace Framework\Controller;

use Framework\View\ViewInterface;

abstract class Controller implements ControllerInterface
{

    public function render(ViewInterface $view)
    {
        echo $view->renderView();
    }
}