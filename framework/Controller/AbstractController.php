<?php
declare(strict_types=1);

namespace Framework\Controller;

class AbstractController implements AbstractControllerInterface
{

    public function render()
    {
        echo "abstract result";
    }
}