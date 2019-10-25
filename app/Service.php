<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['titre','description','type','etat','sousCategorie_id','user_id'];

    public function sousCategorie(){
        return $this->belongsTo(SousCategorie::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function interesses(){
        return $this->hasMany(Interesse::class);
    }
}
