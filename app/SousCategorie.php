<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    protected $fillable = [
        'libelle','image','categorie_id'
    ];
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function produits(){
        return $this->hasMany(Produit::class);
    }
    protected  $table= 'sous_categories';
}
