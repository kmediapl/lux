<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaportyController extends Controller
{
    public function zrealizowanezlecenia() {
        $zlecenia = \App\Zlecenie::all()->sortBy('created_at');
        return view('raporty.zrealizowanezlecenia',['zlecenia'=>$zlecenia]);
    } 
}
