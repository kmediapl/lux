<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class PracownicyController extends Controller
{
    public function dodajpracownika($idzlec) {
        //$zlecenie = \App\Zlecenie::find($idzlec);
        //$roles = App\User::find(1)->roles()->orderBy('name')->get();
        $praczlec=\App\Zlecenie::find($idzlec)->users()->get();
        // $praczlec = \DB::table('zlecenia_pracownicy')
        //             ->where('zlecenia_id', $idzlec)
        //             ->get();
        $b=array();
        foreach ($praczlec as $dana) {
            array_push($b,$dana->id);
        }
        $pracownicy= \DB::table('users')
                    ->whereNotIn('id', $b)
                    ->get();
        // $pracownicy=\App\User::all();

       // $zlecenie = \App\Zlecenie::find($idzlec)->users()->get();
        //$zlecenie = \App\Zlecenie::find($idzlec)->users()->attach($idprac);
        return view('pracownicy.dodajdo',['pracownicy'=>$pracownicy,'idzlec'=>$idzlec, 'praczlec'=>$praczlec]);
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
