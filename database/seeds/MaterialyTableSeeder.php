<?php

use Illuminate\Database\Seeder;
use App\Material;

class MaterialyTableSeeder extends Seeder
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
    $material = new Material();

      $material ->nazwa = $faker->company;
     // $material ->id_zlecenia = $faker->randomDigitNotNull;
      $material ->opis = $faker->text(100);
      $material ->cena_zakupu = $faker->numberBetween(30-150);
      $material ->cena_dla_klienta = $faker->numberBetween(30-150);

      $material ->save();

}
    }
}
