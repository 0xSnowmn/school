<?php
namespace School;

use School\Core\FrontController;
use School\Core\Template;


require '../app/core/config.php';
require APP_PATH . '/core/autoload.php';

$parts = require APP_PATH . '/core/tpl_config.php';
$template = new Template($parts);

$frontController = new FrontController($template);
$frontController->dispatch();