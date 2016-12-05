<?php

use Yaf\Application;

define('APPLICATION_PATH', dirname(__DIR__));

$application = new Application( APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();
?>
