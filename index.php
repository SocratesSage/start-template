<?php

use App\Helpers\Session;
use App\Helpers\Cookie;

require_once 'bootstrap/autoload.php';

Session::start();

$router = new \Bramus\Router\Router();

require_once 'routes/web.php';

$router->run();
