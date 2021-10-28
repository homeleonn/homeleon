<?php

define('HTTP_SIDE', '');

require '../vendor/autoload.php';

use Core\App;

try {
    $app = new App();
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}

require routes('web.php');

$app->run();
