<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zlecenie;
use App\Zleceniodawca;
use App\Rodzajinstalacji;

class ZleceniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function login()
    {
        return view('zlecenia.login');
    }

    public function dologin(Request $request)
    {
       return $request->url();
        
        // if (Auth::attempt()) {

        //     // validation successful!
        //     // redirect them to the secure section or whatever
        //     // return Redirect::to('secure');
        //     // for now we'll just echo success (even though echoing in a controller is bad)
        //     echo 'SUCCESS!';
    
        // } else {        
    
        //     // validation not successful, send back to form 
        //     return Redirect::to('login');
    
        // }
    }

    public function index()
    {   
        $niezrealizowane = Zlecenie::where('czy_zrealizowane','=',true)->paginate(10);
       
        return view('zlecenia.index',['niezrealizowane'=>$niezrealizowane]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        
        $rodzajeuslug = \App\Rodzajuslugi::all();
        $rodzajeinstalacji = Rodzajinstalacji::all();
        $zleceniodwacy = Zleceniodawca::all();
        return view ('zlecenia.dodaj',['zleceniodawcy'=>$zleceniodwacy, 'rodzajeinstalacji'=>$rodzajeinstalacji, 'rodzajeuslug'=>$rodzajeuslug ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nazwa' => 'required',
            'opis' => 'required',
            'data_rozpoczecia' => 'required',
            'data_zlecenia' => 'required',
            'data_zakonczenia' => 'required',
            'rodzaj_instalacji' => 'required',
            'rodzaj_uslugi' => 'required',
            'id_zleceniodawcy' => 'required',
            'kilometry' => 'required',
            'kilometry_koszt' => 'required',

        ]);
        $zlecenie = new Zlecenie;

     // $data = $request->all();

       // return $obiekt;
       $zlecenie->create($validatedData);
       
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $zlecenie = Zlecenie::find($id);
        return view ('zlecenia.dane',['zlecenie'=>$zlecenie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
