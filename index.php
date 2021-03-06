<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};

$router =  Router::load('routes.php');


$router->direct(Request::uri(), Request::method());