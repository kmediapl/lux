<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Controllers\DB;
use App\User;
use Alert;

class PracownicyController extends Controller
{
    public function index(){
        $pracownicy= \DB::table('users')->get();
        return view('pracownicy.index',['pracownicy'=>$pracownicy]);
    }
    
    
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

    public function dodaj() {
            return view('pracownicy.dodaj');
    }
    public function zapiszpracownika(Request $request) {

        $walidavja = $request->validate([
            'imie' => 'required',
            'nazwisko' =>'required',
            'email' => 'required|unique:users',
            // 'nazwa' => 'required',
            'haslo' => 'required',
            'haslo2' => 'required',
        ]);
        $haslo = $request->haslo;
        $haslo2 = $request->haslo2;
        $nazwa = $request->imie.' '.$request->nazwisko;

        if ($haslo != $haslo2) {
            return 'Hasła są nieprawidłowe'.$haslo.'::'.$haslo2;
        }
        else {
            \DB::table('users')->insert([
                ['name' => $nazwa  ,'imie' => $request->imie , 'nazwisko' => $request->nazwisko ,'password' => bcrypt($request->haslo)
                , 'email'=> $request->email, 'stawka_za_godzine'=>$request->stawka_za_godzine]
            ]);
            return redirect('/pracownicy');
        }

    //    $user->nazwa = $request('nazwa');
    //    $user->nazwa = $request('nazwa');
    //    $user->nazwa = $request('nazwa');

        }
        public function destroy($id)
        {
            $obiekt = \App\User::find($id);
            $obiekt->delete();
            Alert::add('error', 'Pracownik został usunięty')->flash();
            return redirect('/pracownicy');
        }
}
