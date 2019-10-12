<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'libelle','image'
    ];
    public function sousCategories(){
        return $this->hasMany(SousCategorie::class);
    }
}
