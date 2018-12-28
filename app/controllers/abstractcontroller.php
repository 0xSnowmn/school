<?php
namespace School\Controllers;

use School\Core\FrontController;


class AbstractController
{
    private $_controller;
    private $_action;
    private $_params;

    private $_tpl;


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

    public function setTemplate($tpl)
    {
        $this->_tpl = $tpl;
    }

    public function view()
    {
        $viewPath = VIEW_PATH . $this->_controller . '/' . $this->_action . '.v.php';
        if ($this->_action == FrontController::NOT_FOUND_ACTION || !file_exists($viewPath)) {
            require VIEW_PATH . 'notfound/noview.v.php';
        }
        $this->_tpl->setView($viewPath);
        $this->_tpl->render();
        require $viewPath;
    }
}