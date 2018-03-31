<?php

use Illuminate\Database\Seeder;
use App\Rodzajuslugi;

class RodzajeuslugTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
    $zlecenia = new Rodzajuslugi();
     
           $zlecenia->nazwa ='awaria';
      $zlecenia->save();

      $zlecenia = new Rodzajuslugi();
     
     
      $zlecenia->nazwa ='montaż';
      $zlecenia->save();
      $zlecenia = new Rodzajuslugi();
     
     
      $zlecenia->nazwa ='przegląd kwartalny';
      $zlecenia->save();
      $zlecenia = new Rodzajuslugi();
     
     
      $zlecenia->nazwa ='przegląd połroczy';
      $zlecenia->save();
      $zlecenia = new Rodzajuslugi();
     
     
      $zlecenia->nazwa ='naprawa gwarancyjna';
      $zlecenia->save();
      $zlecenia = new Rodzajuslugi();
     
     
      $zlecenia->nazwa ='naprawa pogwarancyjna';
      $zlecenia->save();
      $zlecenia = new Rodzajuslugi();
     
     
      $zlecenia->nazwa ='inne';
      $zlecenia->save();
  


    }
}
