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


   /* public function getAnnoncesAndServicesByUser(){
        return User::with(['annonces' => function ($query) {
            $query->paginate(15)
            ->orderBy('id','desc');
        },'annonces','services']);
    }*/

}