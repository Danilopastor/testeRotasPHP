<?php

use Marcelo\Controllers\IndexController;
use Marcelo\Controllers\NovoController;
use Marcelo\Controllers\Redirect;

return [
    '/redirect'=>Redirect::class,
    '/' => IndexController::class,
    '/novo'=>NovoController::class
];