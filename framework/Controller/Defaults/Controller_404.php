<?php
declare(strict_types=1);

namespace Framework\Controller\Defaults;

use Framework\Controller\Controller;
use Framework\View\ViewInterface;

class Controller_404 extends Controller
{
    public function render(ViewInterface $view)
    {
        echo "404";
    }
}