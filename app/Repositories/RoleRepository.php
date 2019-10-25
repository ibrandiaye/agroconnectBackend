<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 08/10/2019
 * Time: 08:10
 */

namespace App\Repositories;


use App\Role;

class RoleRepository extends RessourceRepository {
    public function __construct(Role $role){
        $this->model = $role;
    }
}