<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','telephone','adresse'
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function paysan(){
        return $this->belongsTo(Paysan::class);
    }
    public function entreprise(){
        return $this->belongsTo(Entreprise::class);
    }
    public function cooperations(){
        $this->hasMany(Cooperation::class);
    }
    public function publications(){
        $this->hasMany(Publication::class);
    }
    public function particulier(){
        $this->belongsTo(Particulier::class);
    }
    public function annonces(){
        $this->hasMany(Annonce::class);
    }
    public function posters(){
        return $this->hasMany(Poster::class);
    }
    public function paiements(){
        return $this->hasMany(Paiement::class);
    }
    public function services(){
        return $this->hasMany(Service::class);
    }
    public function interesses(){
        return $this->hasMany(Interesse::class);
    }

    public function conseils(){
        return $this->hasMany(Conseil::class);
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
