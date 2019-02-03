<?php
namespace School\Controllers;

use School\Models\PrivilegesModel;
use School\Core\Helpers;


class PrivilegesController extends AbstractController
{
    use Helpers;
    public function defaultAction()
    {
        $this->language->load('index+default');
        $this->data['privileges'] = PrivilegesModel::getAll();
        $this->view();
    }

    public function addAction()
    {

        if (isset($_POST['submit'])) {
            $privilege = new PrivilegesModel();
            $privilege->PrivilegeTitle = $this->filt_str($_POST['title']);
            $privilege->Privilege = $this->filt_str($_POST['privilege']);
            if ($privilege->save()) {
                $this->route('/privileges');
            }
        }
        $this->view();
    }

    public function editAction()
    {
        $id = $this->filt_int($this->_params[0]);
        $privilege = PrivilegesModel::getByPK($id);
        $this->data['privilege'] = $privilege;
        if (isset($_POST['submit'])) {
            $privilege->PrivilegeTitle = $this->filt_str($_POST['title']);
            $privilege->Privilege = $this->filt_str($_POST['privilege']);
            if ($privilege->save()) {
                $this->route('/privileges');
            }
        }
        $this->view();
    }

    public function deleteAction()
    {
        $id = $this->filt_int($this->_params[0]);
        $group = PrivilegesModel::getByPK($id);
        $group->delete();
        $this->route('/privileges');
    }
}