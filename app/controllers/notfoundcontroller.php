<?php
namespace School\Controllers;

class NotFoundController extends AbstractController
{
    public function notFoundAction()
    {
        $this->_tpl->editTpl([':view' => ':vie']);
        $this->view();
    }
}