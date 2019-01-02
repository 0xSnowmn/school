<?php
namespace School\Controllers;

use School\Models\UserGroupsModel;
use School\Core\Helpers;

class UsersGroupsController extends AbstractController
{
    use Helpers;
    public function defaultAction()
    {
        $this->data['groups'] = UserGroupsModel::getAll();
        $this->view();
    }

    public function addAction()
    {
        if (isset($_POST['submit'])) {
            $group = new UserGroupsModel;
            $group->GroupName = $_POST['group'];
            $group->save();
        }
        $this->view();
    }
    public function editAction()
    {

        $id = $this->_params[0];
        $group = UserGroupsModel::getByPK($id);
        $this->data['group'] = $group;
        if (isset($_POST['submit'])) {
            $group->GroupName = $_POST['group'];
            $group->save();
        }
        $this->view();
    }
    public function deleteAction()
    {

        $id = $this->_params[0];
        $group = UserGroupsModel::getByPK($id);
        $group->delete();

        $this->route('/usersgroups');
    }

}