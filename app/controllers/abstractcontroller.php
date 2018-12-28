<?php
namespace School\Controllers;

class AbstractController
{
    private $_controller;
    private $_action;
    private $_params;

    public function setController($controller)
    {
        $this->_controller = $controller;
    }
    public function setAction($action)
    {
        $this->_action = $action;
    }
    public function setParams($params)
    {
        $this->_params = $params;
    }
}