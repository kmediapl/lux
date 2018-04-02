<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zleceniodawca extends Model
{
    protected $table = 'zleceniodawcy';

    public function obiekty()
    {
        return $this->hasMany('App\Obiekt');
    }
}
