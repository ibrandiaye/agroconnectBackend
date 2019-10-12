<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grenier extends Model
{
    protected $fillable = [
        'latitude','longitude','adresse','cooperation_id'
    ];
    public function cooperation(){
        return $this->belongsTo(Cooperation::class);
    }
}
