<?php

use ishop\App;
use ishop\Router;

include_once dirname(__DIR__) . "/config/init.php";
include_once LIBS . "/functions.php";
include_once CONF . "/routes.php";


new App();


debug(Router::getRoutes());