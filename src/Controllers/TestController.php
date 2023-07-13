<?php
declare(strict_types=1);

namespace Practice\Controllers;

use Framework\Controller\Controller;
use Framework\View\ViewInterface;

class TestController extends Controller
{
    public function render(ViewInterface $view)
    {
        echo "test";
    }
}