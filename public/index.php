<?php

define('HTTP_SIDE', '');
define('ROOT', dirname(__DIR__));

require '../vendor/autoload.php';

use Homeleon\App;

try {
    $app = new App();
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}

require routes('web.php');

$app->run();
