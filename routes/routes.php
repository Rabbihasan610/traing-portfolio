<?php

use Pecee\SimpleRouter\SimpleRouter;
use My\Portfolio\Controllers\Frontend\HomeController;

// Define a route
SimpleRouter::get(BASE_DIR . '/', [HomeController::class, 'index']);
