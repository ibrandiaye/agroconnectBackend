<?php

/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 09/10/2019
 * Time: 01:54
 */

namespace App\Repositories;


use App\Annonce;

class AnnonceRepository extends RessourceRepository
{
    private $sousCategorieId;
    public function __construct(Annonce $annonce)
    {
        $this->model = $annonce;
    }
    public function getLastsAnnonce($nb)
    {
        return Annonce::with(['produit'])
            ->limit($nb)
            ->orderBy('id', 'desc')
            ->get();
    }
    public function getOneAnnonce($id)
    {
        return Annonce::with([
            'produit'/* => function ($query) {
            $query->where('id','=',$id);
        }*/, 'produit.sousCategorie', 'produit.sousCategorie.categorie'
        ])
            ->where('id', $id)
            ->first();
    }
    public function getAllAnnonce()
    {
        return Annonce::with(['produit', 'produit.sousCategorie', 'produit.sousCategorie.categorie', 'user'])
            ->orderBy('id', 'desc')
            ->get();
    }
    public function getAnnonceByCategorie($id)
    {
        $this->sousCategorieId = $id;
        return Annonce::with(['produit', 'produit.sousCategorie' => function ($query) {
            $query->where('id', '=', $this->sousCategorieId);
        }, 'produit.sousCategorie.categorie', 'user'])
            ->orderBy('id', 'desc')

            ->get();
    }
    public function getAnnonceNoValidate()
    {
        return Annonce::with(['produit', 'produit.sousCategorie', 'produit.sousCategorie.categorie', 'user'])
            ->where('etat', '=', 0)
            ->get();
    }
    public function getAnnonceByUser($id)
    {
        return Annonce::with(['produit', 'user', 'posters', 'posters.user'])
            ->where('user_id', $id)
            ->get();
    }
    public function getAnnonceUserById($id)
    {
        return Annonce::with(['produit', 'produit.sousCategorie', 'produit.sousCategorie.categorie', 'user', 'posters', 'posters.user'])
            ->where('id', $id)
            ->first();
    }
    /* public function getAnnonceByUser($id){
        return Annonce::with(['user','posters','posters.user'])
            ->where('user_id',$id)
            ->get();
    }
*/
    public function countAnnonce(){
        return DB::table('annonces')->count();
    }
}
