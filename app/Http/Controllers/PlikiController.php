<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plik;

class PlikiController extends Controller
{
    public function store(Request $request)
    {
       if($request->get('image'))
       {
          $image = $request->get('image');
          $name = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
          \Image::make($request->get('image'))->save(public_path('/images/').$name);
         $id__zlec =$request->get('id_zlec');
       
        }

       $image= new Plik();
       $image->nazwa = $name;
       $image->zlecenia_id=$id__zlec;
       $image->save();

       return response()->json(['success' => 'You have successfully uploaded an image'], 200);
     }
}
