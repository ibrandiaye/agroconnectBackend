<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paysan extends Model
{
    protected $fillable = [
        'matricule','cni','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
