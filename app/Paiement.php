<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $fillable = [
        'montant','poster_id','user_id'
    ];
    public function poster(){
        return $this->belongsTo(Poster::class);
    }
    public function  user(){
        return $this->belongsTo(User::class);
    }
}
