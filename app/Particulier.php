<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Particulier extends Model
{
    protected $fillable = [
        'cni','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
