<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    protected $fillable = [
        'libelle','image','cooperation_id'
    ];
    public function cooperation(){
        return $this->belongsTo(Cooperation::class);
    }
}
