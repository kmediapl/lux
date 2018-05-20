<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use JWTFactory;
use JWTAuth;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Cmgmyr\Messenger\Traits\Messagable;

class User extends Authenticatable implements JWTSubject
{
  use Notifiable;
  use Messagable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function zlecenia()
{

 return $this->belongsToMany('App\Zlecenie', 'zlecenia_pracownicy', 'user_id', 'zlecenia_id')->withTimestamps();
}
public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
