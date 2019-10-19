<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['titre','decription','type','etat','sousCategorie_id'];

    public function sousCategorie(){
        return $this->belongsTo(SousCategorie::class);
    }
}
