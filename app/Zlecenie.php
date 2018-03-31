<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zlecenie extends Model
{
  protected $table = 'zlecenia';
  protected $fillable = ['nazwa','data_zlecenia','data_rozpoczecia','data_zakonczenia','nazwa','rodzaj_uslugi','rodzaj_instalacji','zleceniodawca_id','kilometry',
'kilometry_koszt','czy_zrealizowane','kto_zrealizowal','opis'

];

  public function users()
 {
     return $this->belongsToMany('App\User', 'zlecenia_pracownicy', 'zlecenia_id', 'user_id')->withTimestamps();
 }
}
