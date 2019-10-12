<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 08/10/2019
 * Time: 22:11
 */

namespace App\Repositories;


use App\Categorie;

class CategorieRepository extends RessourceRepository{
    public function __construct(Categorie $categorie){
        $this->model = $categorie;
    }

}