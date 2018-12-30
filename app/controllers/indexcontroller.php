<?php
namespace School\Controllers;

class IndexController extends AbstractController
{
    public function defaultAction()
    {
        $this->view();
    }

    public function addAction()
    {
        $this->view();
        $this->_data['hello'] = 'hello You';
        extract($this->_data);
        var_dump($hello);

    }
}