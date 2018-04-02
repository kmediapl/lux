<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracownicyController extends Controller
{
    public function dodajpracownika($idzlec) {
        //$zlecenie = \App\Zlecenie::find($idzlec);
        //$roles = App\User::find(1)->roles()->orderBy('name')->get();
        $pracownicy=\App\User::all();
       // $zlecenie = \App\Zlecenie::find($idzlec)->users()->get();
        //$zlecenie = \App\Zlecenie::find($idzlec)->users()->attach($idprac);
        return view('pracownicy.dodajdo',['pracownicy'=>$pracownicy,'idzlec'=>$idzlec]);
        //return $idzlec.'::'.$idprac;

    }
    public function dodajdozapisz($idprac,$idzlec) {
        $zlecenie = \App\Zlecenie::find($idzlec)->users()->attach($idprac);
        return redirect()->back();
    }
    public function odlacz($id) {
        return 'Zrobić odłączenieMetoda delete';
    }

}
