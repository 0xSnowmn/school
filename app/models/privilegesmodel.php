<?php

namespace School\Models;

class PrivilegesModel extends AbstractModel
{
    public $PrivilegeId;
    public $PrivilegeTitle;
    public $Privilege;

    protected static $tableName = 'app_privileges';
    protected static $tableSchema = array(
        'PrivilegeId' => self::DATA_TYPE_INT,
        'PrivilegeTitle' => self::DATA_TYPE_STR,
        'Privilege' => self::DATA_TYPE_STR,
    );
    protected static $primaryKey = 'PrivilegeId';


}