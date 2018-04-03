<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialyController extends Controller
{
    
    
    public function dodajmaterial($id) {

        $zlecenie = \App\Zlecenie::find($id);
        $materiaywzleceniu = \App\Zlecenie::find($id)->materialy()->get();
        $materialy = \App\Material::all();
        return view ('materialy.dodajdo',['materialy'=>$materialy,'idzlec'=>$id,'materialywzleceniu'=>$materiaywzleceniu,'zlecenie'=>$zlecenie]);
    }
    public function dodajdozapisz($idmat,$idzlec) {


        $material = \App\Zlecenie::find($idzlec)->materialy()->attach($idmat);
        return redirect()->back();

        // $materialy = \App\Material::all();
        // return view ('materialy.dodajdo',['materialy'=>$materialy,'idzlec'=>$id]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materialy = \App\Material::paginate(25);
        return view ('materialy.index',['materialy'=>$materialy]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('materialy.dodaj');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $material = new \App\Material;
        $dane = $request->all();
        $material->create($dane);
        
        return 'Zapisano';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
