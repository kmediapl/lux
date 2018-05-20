<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZleceniodawcyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zleceniodawcy = \App\Zleceniodawca::all();
        //return $zleceniodawcy ;
        return view('zleceniodawcy.index',['zleceniodawcy'=> $zleceniodawcy]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zleceniodawcy.dodaj');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $validatedData= $request->validate([
            'nazwa' => 'required',
            'miejscowosc' => 'required',
            'nrdomulokalu' => 'required',
            'ulica' => 'required',
            'kodpocztowy' => 'required',
            'telefon' => 'required',
            'email' => 'required',
            'nip' => 'required',

        ]);
        // $dane=$request->all();
        
        $zleceniodawca= new \App\Zleceniodawca;
      
        $zleceniodawca->create($validatedData);
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
        $zleceniodawca = \App\Zleceniodawca::find($id);
        $obiekty = $zleceniodawca->obiekty;
        return view ('zleceniodawcy.dane',['zleceniodawca'=>$zleceniodawca, 'obiekty'=>$obiekty]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('zleceniodawcy.edytuj', ['id'=>$id]);
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
       
    }
}
