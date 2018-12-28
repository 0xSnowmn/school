<?php
namespace School\Core;

class AutoLoad
{

    public static function autoload($class)
    {
        $class = str_replace('School', '', $class);
        $class = str_replace('\\', '/', $class);
        $class = strtolower($class);
        $class = APP_PATH . $class . '.php';
        if (file_exists($class)) {
            require $class;
        }
    }


}

spl_autoload_register(__NAMESPACE__ . '\Autoload::autoload');