<?php

namespace School\Core;

class Registry
{
    private static $instance;

    private function __construct()
    {
    }
    public function __clone()
    {
    }
    public function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function __set($key, $value)
    {
        $this->$key = $value;
    }
    public function __get($key)
    {
        $this->$key;
    }
}