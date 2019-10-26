<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adhesion extends Model
{
    protected $fillable = [
        'paysan_id', 'cooperation_id'
    ];
    public function cooperation()
    {
        return $this->belongsTo(Cooperation::class);
    }
    public function paysan()
    {
        return $this->belongsTo(Paysan::class);
    }
}
