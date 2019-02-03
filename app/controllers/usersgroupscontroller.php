<?php
namespace School\Controllers;

use School\Models\UserGroupsModel;
use School\Core\Helpers;
use School\Models\PrivilegesModel;
use School\Models\PrivilegesGroupsModel;

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
        $groups = PrivilegesModel::getAll();
        $this->data['groups'] = $groups;
        if (isset($_POST['submit'])) {
            $group = new UserGroupsModel;
            $group->GroupName = $this->filt_str($_POST['group']);
            if ($group->save()) {
                if (isset($_POST['groups']) && is_array($_POST['groups'])) {
                    foreach ($_POST['groups'] as $privilegeId) {
                        $privilegeGroup = new PrivilegesGroupsModel();
                        $privilegeGroup->GroupId = $group->GroupId;
                        $privilegeGroup->PrivilegeId = $privilegeId;
                        $privilegeGroup->save();
                    }
                }
                $this->messenger->add('test');
                $this->route('/');
            }

        }
        $this->view();
    }
    public function editAction()
    {

        $id = $this->filt_int($this->_params[0]);
        $group = UserGroupsModel::getByPK($id);
        $this->data['group'] = $group;
        if (isset($_POST['submit'])) {
            $group->GroupName = $this->filt_str($_POST['group']);
            $group->save();
        }
        $this->view();
    }
    public function deleteAction()
    {
        $id = $this->filt_int($this->_params[0]);
        $group = UserGroupsModel::getByPK($id);
        $group->delete();
        $this->route('/usersgroups');
    }

}