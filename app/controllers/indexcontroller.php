<?php
namespace School\Controllers;

class IndexController extends AbstractController
{
    public function defaultAction()
    {
        $this->language->load('index+default');
        $this->view();
    }

    public function addAction()
    {
        $this->view();
    }
}