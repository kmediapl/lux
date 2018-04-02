<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materialy';
    public function zlecenia()
    {
        return $this->belongsToMany('App\Zlecenie', 'zlecenia_materialy', 'zlecenia_id', 'material_id')->withTimestamps();
    }
}
