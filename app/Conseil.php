<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Conseil extends Model
{
    protected $fillable = [
        'titre','desctiption','image','audio','video','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }


}
