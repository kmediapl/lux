<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obiekt extends Model
{
    protected $table = 'obiekty';
    protected $fillable = ['nazwa','ulica','nrdomulokalu','kodpocztowy','miejscowosc', 'telefon', 'uwagi','zleceniodawca_id'];

    public function zleceniodawca()
    {
        return $this->belongsTo('App\Zleceniodawca');
    }
}


