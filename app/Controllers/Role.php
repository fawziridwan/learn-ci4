<?php

namespace App\Controllers;

use App\Models\RoleModel;

class Role extends BaseController
{
    public function index()
    {
        $data['title'] = 'Role Management';

        $db = \Config\Database::connect();
        $roleModels = new RoleModel($db);
        $data = $roleModels->getRoleAll();
        echo print_r($data);
        exit();
        // return view('roles/index', $);
    }
}
