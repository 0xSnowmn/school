<?php
namespace School\Core;

class FrontController
{
    const NOT_FOUND_CONTROLLER = 'NotFoundController';
    const NOT_FOUND_ACTION = 'notFoundAction';

    protected $_controller = 'index';
    protected $_action = 'default';
    protected $_params = [];

    public function __construct()
    {
        $this->url();
    }


    private function url()
    {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $url = explode('/', trim($url, '/'), 3);

        if (isset($url[0]) && $url[0] != '') {
            $this->_controller = $url[0];
        }
        if (isset($url[1]) && $url[1] != '') {
            $this->_action = $url[1];
        }
        if (isset($url[2]) && $url[2] != '') {
            $this->_params = explode('/', $url[2]);
        }
    }

    public function dispatch()
    {
        $controlelrClassName = 'School\Controllers\\' . ucfirst($this->_controller) . 'Controller';
        $action = $this->_action . 'Action';
        if (!method_exists($controlelrClassName, $action)) {
            $controlelrClassName = 'School\Controllers\\' . self::NOT_FOUND_CONTROLLER;
            $action = $this->_action = self::NOT_FOUND_ACTION;
        }

        $controller = new $controlelrClassName();
        $controller->setController($this->_controller);
        $controller->setAction($this->_action);
        $controller->setParams($this->_params);
        $controller->$action();
    }


}