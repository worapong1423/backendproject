<?php


namespace App\Http\Service;


use App\Role;

class RoleService extends BaseService
{

    public function getRoles()
    {
        return Role::all();
    }

}
