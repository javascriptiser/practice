<?php
declare(strict_types=1);


use Practice\Router;

require_once __DIR__ . '/vendor/autoload.php';

try {

    $uri = $_SERVER['REQUEST_URI'];

    $response = Router::start($uri);

    echo $response;

} catch (Exception $exception) {
    echo $exception->getMessage();
}