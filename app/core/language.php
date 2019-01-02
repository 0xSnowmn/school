<?php

namespace School\Core;

class Language
{
    protected $dictionary = [];

    public function load($path)
    {
        $defaultLanguage = DEFAULT_LANGUAGE;
        if (isset($_SESSION['lang'])) {
            $defaultLanguage = $_SESSION['lang'];
        }
        $path = str_replace('+', '/', $path);
        $path = strtolower($path);
        $path = LANGUAGE_PATH . $defaultLanguage . '/' . $path . '.lang.php';
        if (file_exists($path)) {
            require $path;
            if (is_array($_) && !empty($_)) {
                foreach ($_ as $key => $value) {
                    $this->dictionary[$key] = $value;
                }
            }
        }

    }

    public function getDictionary()
    {
        return $this->dictionary;
    }
}