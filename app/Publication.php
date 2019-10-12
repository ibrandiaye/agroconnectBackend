<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'libelle','type','zone','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
