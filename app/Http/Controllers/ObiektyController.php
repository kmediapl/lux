<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obiekt;
use App\Zleceniodawca;

class ObiektyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obiekty=Obiekt::paginate(25);
        return view ('obiekty.index',['obiekty'=>$obiekty]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zleceniodwacy = Zleceniodawca::all();
        return view ('obiekty.dodaj',['zleceniodawcy'=>$zleceniodwacy]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obiekt = new Obiekt;

        $data = $request->all();

       // return $obiekt;
        $obiekt->create($data);
        return redirect('obiekty');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obiekt = Obiekt::find($id);
        return view ('obiekty.dane',['obiekt'=>$obiekt]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obiekt = Obiekt::find($id);
        return view ('obiekty.edycja',['obiekt'=>$obiekt]);
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
        $obiekt = Obiekt::find($id);
       // print_r($id);
      // $input= $request->all();
       //  $data = $request->all();
         //print_r($data);
        //$obiekt->fill($input)->save();
        $obiekt->update($request->all());
        //Session::flash('flash_message', 'Task successfully added!');
     
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obiekt = Obiekt::find($id);
        $obiekt->delete();
        return 'skasowane';
    }
}
