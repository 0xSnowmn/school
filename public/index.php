<?php
namespace School;

use School\Core\FrontController;


require '../app/config.php';
require APP_PATH . '/core/autoload.php';

$frontController = new FrontController();
$frontController->dispatch();