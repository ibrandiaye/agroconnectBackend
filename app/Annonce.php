<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = [
        'libelle','prix_unitaire','quantite','etat','produit_id','user_id'
    ];
    public function produit(){
        return $this->belongsTo(Produit::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function posters(){
        return $this->hasMany(Poster::class);
    }
}
