<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooperation extends Model
{
    protected $fillable = [
        'matricule', 'dossier', 'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function parcelles()
    {
        return $this->hasMany(Parcelle::class);
    }
    public function cultures()
    {
        return $this->hasMany(Culture::class);
    }
    public function greniers()
    {
        return $this->hasMany(Grenier::class);
    }
    public function adhesions()
    {
        return $this->hasMany(Adhesion::class);
    }
}
