<?php

use Illuminate\Database\Seeder;
use App\Rodzajinstalacji;

class RodzajeinstalacjiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        
            $rodzaj = new Rodzajinstalacji();
             
          
              $rodzaj->nazwa = 'hydraulika';
              $rodzaj->save();

              $rodzaj = new Rodzajinstalacji();
         
              $rodzaj->nazwa = 'klimatyzacja';
              $rodzaj->save();
              $rodzaj = new Rodzajinstalacji();
         
              $rodzaj->nazwa = 'wentylacja';
              $rodzaj->save();
              $rodzaj = new Rodzajinstalacji();
         
              $rodzaj->nazwa = 'elektyrczne';
              $rodzaj->save();
              $rodzaj = new Rodzajinstalacji();
         
              $rodzaj->nazwa = 'przemysłowe';
              $rodzaj->save();
              $rodzaj = new Rodzajinstalacji();
         
              $rodzaj->nazwa = 'inne';
              $rodzaj->save();
        
       
    }
}
