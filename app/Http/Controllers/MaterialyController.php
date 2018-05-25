<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as BaseCollection;

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
        // $idrec = \DB::table('zlecenia_materialy')->select('id')->orderBy('created_at','desc')->get()->first();
        // $liczba = $idrec->id;
        // $idrec2= \DB::table('zlecenia_materialy')->where('id', $liczba)->update(
        //        ['id_rec' => $liczba]);


        return redirect()->back();

        // $materialy = \App\Material::all();
        // return view ('materialy.dodajdo',['materialy'=>$materialy,'idzlec'=>$id]);
    }
    public function odlacz($idmat,$idzlec,$idrec) {


        $material = \App\Zlecenie::find($idzlec)->materialy()->wherePivot('id', '=', $idrec)->detach($idmat);
        return redirect()->back();

        // $materialy = \App\Material::all();
        // return view ('materialy.dodajdo',['materialy'=>$materialy,'idzlec'=>$id]);
    }

public function testpivot () {

    // $model->problems()->where('phone_problem', $problem->id)->first()->pivot->price;

    $material = \App\Zlecenie::find(25)->materialy()->first()->pivot->cena_materialu;

    // $idrec = \DB::table('zlecenia_materialy')->select('id')->get()->first();
    // $liczba = $idrec->id;
    // $idrec2= \DB::table('zlecenia_materialy')->where('id', $liczba)->update(
    //        ['id_rec' => $liczba]);
  

return  response()->json($material);
}
public function testpivot2 () {
    // $material = \App\Zlecenie::find(4)->materialy()->attach([4 =>['cena_dla_klienta' => 23]]);
    
    // $idrec= \DB::table('zlecenia_materialy')->where('id', 5)->update(
    //     ['cena_dla_klienta' => 23, 'ilosc' => 123]
    // );
    $idrec=syncWithoutDetaching();
    // $idrec=\App\Zlecenie::find(1)->materialy()->extractAttachIdAndAttributes()->get();
    return  response()->json($idrec);

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

    public function zmien(Request $request){
        $idzlec=$request->idzlec;
        $idmat=$request->idmat;
        // $material = \App\Zlecenie::find($idzlec)->materialy()->updateExistingPivot(\App\Material::find($request->idmat),
        // ['cena_materialu'=>$request->cenamaterialu,'cena_dla_klienta'=>$request->cenadlaklienta,'ilosc'=>$request->ilosc]);
        
         $idrec2= \DB::table('zlecenia_materialy')->where('id', $request->idrecordu)->update(
           ['cena_materialu'=>$request->cenamaterialu, 'ilosc'=>$request->ilosc,'jednostka'=>$request->jednostka,'cena_dla_klienta'=>$request->cenadlaklienta,'czy_zablokowane'=>1 ]);
        

        return redirect('/materialy/dodajdo/'.$idzlec);
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
