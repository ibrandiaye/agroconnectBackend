<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 09/10/2019
 * Time: 01:54
 */

namespace App\Repositories;


use App\Annonce;

class AnnonceRepository extends RessourceRepository{
    public function __construct(Annonce $annonce){
        $this->model = $annonce;
    }

}