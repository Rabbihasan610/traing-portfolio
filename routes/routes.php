<?php

use My\Portfolio\Base\Router;
use My\Portfolio\Controllers\Frontend\HomeController;

// Define a route
Router::get('/', [HomeController::class, 'index']);
Router::get('/create', [HomeController::class, 'create']);
