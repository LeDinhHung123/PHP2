<?php

use Hungt\PhpOop\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');