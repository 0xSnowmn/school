<?php
namespace School;

use School\Core\FrontController;
use School\Core\Template;
use School\Core\Language;


require '../app/core/config.php';
require APP_PATH . '/core/autoload.php';

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'ar';
}

$parts = require APP_PATH . '/core/tpl_config.php';
$template = new Template($parts);
$language = new Language();
$frontController = new FrontController($template, $language);
$frontController->dispatch();