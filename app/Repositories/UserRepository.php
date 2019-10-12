<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 08/10/2019
 * Time: 12:25
 */

namespace App\Repositories;


use App\User;

class UserRepository extends RessourceRepository{
    public function __construct(User $user){
        $this->model = $user;
    }

}