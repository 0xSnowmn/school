<?php

namespace School\Models;

class PrivilegesGroupsModel extends AbstractModel
{
    public $Id;
    public $PrivilegeId;
    public $GroupId;

    protected static $tableName = 'app_users_groups_privileges';
    protected static $tableSchema = array(
        'Id' => self::DATA_TYPE_INT,
        'PrivilegeId' => self::DATA_TYPE_INT,
        'GroupId' => self::DATA_TYPE_INT,
    );
    protected static $primaryKey = 'Id';


}