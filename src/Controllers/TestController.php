<?php
declare(strict_types=1);

namespace Practice\Controllers;

use Framework\Controller\AbstractController;

class TestController extends AbstractController
{
    public function render()
    {
        echo "test";
    }
}