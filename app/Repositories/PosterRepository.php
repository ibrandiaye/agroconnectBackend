<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 13/10/2019
 * Time: 22:43
 */

namespace App\Repositories;


use App\Poster;

class PosterRepository extends  RessourceRepository{
    public function __construct(Poster $poster){
        $this->model = $poster;
    }

}