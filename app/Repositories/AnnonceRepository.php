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
    public function getLastsAnnonce($nb){
        return Annonce::with(['produit'])
            ->limit($nb)
            ->orderBy('id','desc')
            ->get();
    }
    public function getOneAnnonce($id){
        return Annonce::with(['produit'/* => function ($query) {
            $query->where('id','=',$id);
        }*/
            ,'produit.sousCategorie','produit.sousCategorie.categorie'])
            ->where('produit_id',$id)
            ->first();
    }
    public function getAllAnnonce(){
        return Annonce::with(['produit'])
            ->orderBy('id','desc')
            ->get();
    }

}