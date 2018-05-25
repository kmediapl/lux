<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materialy';
    protected $fillable = ['nazwa', 'opis','cena_zakupu','cena_dla_klenta'];
    public function zlecenia()
    {
        return $this->belongsToMany('App\Zlecenie', 'zlecenia_materialy', 'zlecenia_id', 'material_id')
        ->withPivot('cena_dla_klienta', 'id','cena_materialu', 'ilosc','czy_zablokowane','jednostka')->withTimestamps();
    }
}
