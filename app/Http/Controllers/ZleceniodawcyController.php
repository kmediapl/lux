<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class ZleceniodawcyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zleceniodawcy = \App\Zleceniodawca::all()->sortByDesc('created_at');
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
        return redirect('/zleceniodawcy');
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
        $zleceniodawca = \App\Zleceniodawca::find($id);
        return view('zleceniodawcy.edytuj', ['zleceniodawca'=> $zleceniodawca]);
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
        $obiekt = Zleceniodawca::find($id);
        // print_r($id);
       // $input= $request->all();
        //  $data = $request->all();
          //print_r($data);
         //$obiekt->fill($input)->save();
         $obiekt->update($request->all());
         //Session::flash('flash_message', 'Task successfully added!');
      
         return redirect('/zleceniodawcy');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obiekt = \App\Zleceniodawca::find($id);
        $obiekt->delete();
        Alert::add('error', 'Zleceniodawca został usunięty')->flash();
        return redirect('/zleceniodawcy');
    }
}
