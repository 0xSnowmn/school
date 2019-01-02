<?php
namespace School;

use School\Core\FrontController;
use School\Core\Template;
use School\Core\Language;
use School\Core\Registry;
use School\Core\appSession;


require '../app/core/config.php';
require APP_PATH . '/core/autoload.php';

$session = new appSession();
$session->start();
if (!isset($session->lang)) {
    $session->lang = DEFAULT_LANGUAGE;
}

$parts = require APP_PATH . '/core/tpl_config.php';
$template = new Template($parts);
$language = new Language();
$registry = Registry::getInstance();
$registry->language = $language;
$registry->session = $session;
$frontController = new FrontController($template, $registry);
$frontController->dispatch();