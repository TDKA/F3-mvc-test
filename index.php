<?php

require 'vendor/autoload.php';

$f3 = \Base::instance();

//CALL CONFIG.INI
$f3->config('config.ini');

//Call routes.ini
$f3->config('routes.ini');

//New SESSSION


new Session();





$f3->run();
