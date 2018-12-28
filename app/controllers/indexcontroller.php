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
        echo 'add';
        $this->view();
    }
}