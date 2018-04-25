<?php

namespace App\Http\Controllers;

use App\Zlecenie;
use App\User;
use Illuminate\Http\Request;

class ZleceniaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $user = \App\User::where('id','=','1');
    //  $user =  User::find(1);
      //  $zlecenia =  User::find($id)->zlecenia()->get();
        
        $zlecenia = Zlecenie::all();
        //return  response()->json($zlecenia);
        //return $zlecenia;
        return  response()->json($zlecenia);
    }
    public function zleceniausera($id)
    {
      // $user = \App\User::where('id','=','1');
    //  $user =  User::find(1);
    $user = 1;
      // $zlecenia =  User::find($id)->zlecenia()->get();
      $zlecenia =  User::find($id)->zlecenia()->get();
      //  $zlecenia = Zlecenie::all();
        //return  response()->json($zlecenia);
        //return $zlecenia;
        return  response()->json($zlecenia);
    }
    public function pokazzlecenie($id) {
        $zlecenie = Zlecenie::find($id);
      

        return  response()->json($zlecenie);
    }
    public function zrealizujzlecenie($id,$user) {
        $zlecenie = Zlecenie::find($id);
        $zlecenie->czy_zrealizowane = true;
        $zlecenie->kto_zrealizowal =$user;
        $zlecenie->save();

        return  response()->json($zlecenie);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
