<?php

namespace School\Core;

class Template
{

    protected $tpl_parts;

    protected $view;
    protected $data;
    protected $registry;


    public function __construct($parts)
    {
        $this->tpl_parts = $parts;
    }

    public function setView($view)
    {
        $this->view = $view;
    }

    public function __get($key)
    {
        return $this->registry->$key;
    }

    public function setData($dat)
    {
        $this->data = $dat;
    }

    public function setRegistry($registry)
    {
        $this->registry = $registry;
    }

    public function EditTpl($edit)
    {
        $this->tpl_parts['tpl'] = $edit;
    }

    private function tpl_start()
    {
        extract($this->data);
        require TEMPLATE_PATH . 'tpl_start.php';
    }

    private function tpl_end()
    {
        extract($this->data);
        require TEMPLATE_PATH . 'tpl_end.php';
    }

    private function startBody()
    {
        extract($this->data);
        require TEMPLATE_PATH . 'b_start.php';
    }

    public function renderTemplate()
    {
        $tpl = $this->tpl_parts['tpl'];
        if ($tpl != '') {
            extract($this->data);
            foreach ($tpl as $tp => $path) {
                if ($tp === ':view') {
                    if (file_exists($this->view)) {
                        require $this->view;
                    }
                } else {
                    require $path;
                }
            }
        }
    }

    public function render()
    {
        ob_start();
        $this->tpl_start();
        $this->startBody();
        $this->renderTemplate();
        $this->tpl_end();
        ob_get_contents();
        ob_flush();
    }

}