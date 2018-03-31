<?php

use Illuminate\Database\Seeder;
use App\Obiekt;


class ObiektyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=0;$i<99;$i++){
        $obiekt = new obiekt();
    
          $obiekt ->nazwa = $faker->company;
          $obiekt ->id_zleceniodawcy = $faker->numberBetween(1-3);
          $obiekt ->ulica = $faker->streetName;
          $obiekt ->nrdomulokalu = $faker->numberBetween(1-3);
          $obiekt ->kodpocztowy = $faker->postcode;
          $obiekt ->miejscowosc = $faker->city;
          $obiekt ->telefon = $faker->phoneNumber;
          $obiekt ->uwagi = $faker->text(100);
           
          $obiekt ->save();
    
    }
    }
}
