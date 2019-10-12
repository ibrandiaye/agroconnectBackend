<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 08/10/2019
 * Time: 22:27
 */

namespace App\Repositories;


use App\Produit;

class ProduitRepository extends RessourceRepository{

    public function __construct(Produit $produit){
        $this->model = $produit;
    }

}