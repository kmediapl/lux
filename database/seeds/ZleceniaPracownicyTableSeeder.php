<?php

use Illuminate\Database\Seeder;
use App\Zlecprac;

class ZleceniaPracownicyTableSeeder extends Seeder
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
    $material = new Zlecprac();

      $material ->zlecenia_id = $faker->numberBetween(1-30);
      $material ->users_id = $faker->numberBetween(1-25);

      $material ->save();

}
    }
}
