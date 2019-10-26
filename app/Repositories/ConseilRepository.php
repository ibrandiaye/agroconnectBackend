<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 25/10/2019
 * Time: 16:06
 */

namespace App\Repositories;


use App\Conseil;

class ConseilRepository extends RessourceRepository {
    public function __construct(Conseil $conseil){
        $this->model = $conseil;
    }

    public function getConseilsWithUser(){
        return Conseil::with(['user'])
                ->orderBy('id','desc')
            ->get();
    }
    public function getConseilOneUser($id){
        return Conseil::with(['user'])
            ->where('id',$id)
            ->first();
    }
}