<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcelle extends Model
{
    protected $fillable = [
        'superficie','latitude','longitude','image','cooperation_id'
    ];
    public function cooperation(){
        return $this->belongsTo(Cooperation::class);
    }
}
