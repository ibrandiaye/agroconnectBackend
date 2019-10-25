<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'libelle','image','description','sous_categorie_id'
    ];
    public function sousCategorie(){
        return $this->belongsTo(SousCategorie::class);
    }
    public function annonces(){
        $this->hasMany(Annonce::class);
    }
}
