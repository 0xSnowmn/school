<?php
namespace School\Controllers;

use School\Core\FrontController;


class AbstractController
{
    protected $_controller;
    protected $_action;
    protected $_params;
    protected $data = [];

    protected $_tpl;
    protected $language;

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

    public function setLanguage($language)
    {
        $this->language = $language;
    }

    public function view()
    {
        $viewPath = VIEW_PATH . $this->_controller . '/' . $this->_action . '.v.php';
        if ($this->_action == FrontController::NOT_FOUND_ACTION || !file_exists($viewPath)) {
            $viewPath = VIEW_PATH . 'notfound/noview.v.php';
        }
        $this->data = array_merge($this->data, $this->language->getDictionary());
        $this->_tpl->setView($viewPath);
        $this->_tpl->setData($this->data);
        $this->_tpl->render();
    }
}