<?php
declare(strict_types=1);

namespace Framework\Controller;

class Controller_404 extends AbstractController
{
    public function render()
    {
        echo "404";
    }
}