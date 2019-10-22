<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 19/10/2019
 * Time: 17:04
 */

namespace App\Repositories;


use App\Service;

class ServiceRepository extends RessourceRepository{
    public function __construct(Service $service){
        $this->model = $service;
    }
    public function getAllServiceWithRelation(){
        return Service::with(['user'])
            ->orderBy('id','desc')
            ->get();
    }
    public function getAllServiceWithCegorie($id){
        return Service::with(['user'])
            ->where('sousCategorie_id',$id)
            ->orderBy('id','desc')
            ->get();
    }
}