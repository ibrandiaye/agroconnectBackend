<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $fillable = [
        'raisonSocial','dossier','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
