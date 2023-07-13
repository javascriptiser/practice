<?php
declare(strict_types=1);

namespace Framework\Exceptions;


use Throwable;

class Exception extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }


    public function __toString(): string
    {
        $file = $this->getFile();
        $message = $this->getMessage();
        return "Error in file: $file </br> Error message: $message";
    }
}