<?php

include_once dirname(__DIR__) . "/config/init.php";
include_once LIBS . "/functions.php";


new \ishop\App();

debug(\ishop\App::$app->getProperties());