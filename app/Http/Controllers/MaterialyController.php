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
    public function dodajdozapiszapi(Request $request) {

        $idmat=$request->idmat;
        $idzlec=$request->idzlec;
        $material = \App\Zlecenie::find($idzlec)->materialy()->attach($idmat);
        return  response()->json($material);

        // $materialy = \App\Material::all();
        // return view ('materialy.dodajdo',['materialy'=>$materialy,'idzlec'=>$id]);
    }
    public function materialywzleceniu($id) {
        // $id=$request->idzlec;
        $materiaywzleceniu = \App\Zlecenie::find($id)->materialy()->get();
        return  response()->json($materiaywzleceniu);
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
    public function indexapi()
    {
         $materialy = \App\Material::all();
              
        return  response()->json($materialy);
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
        
        return redirect('materialy');
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
        $material = \App\Material::find($id);
        $material->delete();
        return redirect('materialy');
    }
}
