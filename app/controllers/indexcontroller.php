<?php
namespace School\Controllers;

class IndexController extends AbstractController
{
    public function defaultAction()
    {
        $this->data['test'] = 'test Data';
        $this->view();
    }

    public function addAction()
    {
        $this->view();
    }
}