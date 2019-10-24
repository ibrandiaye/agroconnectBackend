<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interesse extends Model
{
    protected $fillable = [
        'etat','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
