<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zleceniodawca extends Model
{
    protected $table = 'zleceniodawcy';
    protected $fillable = ['nazwa','ulica','nrdomulokalu','kodpocztowy','miejscowosc','telefon','email','nip'
    
    ];

    public function obiekty()
    {
        return $this->hasMany('App\Obiekt');
    }
}
