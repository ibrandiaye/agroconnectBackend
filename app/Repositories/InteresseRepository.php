<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 24/10/2019
 * Time: 17:57
 */

namespace App\Repositories;


use App\Interesse;

class InteresseRepository extends RessourceRepository{

    public function  __construct( Interesse $interesse){
        $this->model = $interesse;
    }

}