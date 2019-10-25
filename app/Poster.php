<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    protected $fillable = [
        'etat','quantite','annonce_id','user_id'
    ];
    public function annonce(){
        return $this->belongsTo(Annonce::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function paiements(){
        return $this->hasMany(Paiement::class);
    }
}
