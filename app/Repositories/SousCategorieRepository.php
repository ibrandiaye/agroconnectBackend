<?php
/**
 * Created by PhpStorm.
 * User: ibra8
 * Date: 08/10/2019
 * Time: 22:20
 */

namespace App\Repositories;


use App\SousCategorie;
use Illuminate\Support\Facades\DB;

class SousCategorieRepository extends RessourceRepository{
    public function __construct( SousCategorie $sousCategorie){
        $this->model = $sousCategorie;

    }
    public function getAllProduitsWithRelation(){
        return SousCategorie::with(['categorie'])
            ->get();
    }
    public function getSousCategorieWithCategorie($categorie){
        return DB::table('sous_categories')->where('categorie_id', $categorie)->get();
    }

}