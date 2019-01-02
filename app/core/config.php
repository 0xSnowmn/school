<?php
// Define Paths
defined('APP_PATH') ? null : define('APP_PATH', __DIR__ . '/../');
defined('VIEW_PATH') ? null : define('VIEW_PATH', APP_PATH . 'views/');
defined('TEMPLATE_PATH') ? null : define('TEMPLATE_PATH', APP_PATH . 'tpl/');
defined('CSS') ? null : define('CSS', '/css/');
defined('JS') ? null : define('JS', '/js/');
defined('LANGUAGE_PATH') ? null : define('LANGUAGE_PATH', APP_PATH . 'languages/');

// Language
defined('DEFAULT_LANGUAGE') ? null : define('DEFAULT_LANGUAGE', 'ar');

// Sessions
defined('SESSION_SAVE_PATH') ? null : define('SESSION_SAVE_PATH', APP_PATH . '../sessions/');
//Database
defined('DATABASE_HOST_NAME') ? null : define('DATABASE_HOST_NAME', 'localhost');
defined('DATABASE_USER_NAME') ? null : define('DATABASE_USER_NAME', 'yghonem');
defined('DATABASE_PASSWORD') ? null : define('DATABASE_PASSWORD', '123');
defined('DATABASE_DB_NAME') ? null : define('DATABASE_DB_NAME', 'schooldb');
defined('DATABASE_PORT_NUMBER') ? null : define('DATABASE_PORT_NUMBER', 3306);
defined('DATABASE_CONN_DRIVER') ? null : define('DATABASE_CONN_DRIVER', 1);



