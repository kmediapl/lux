<?php

use Illuminate\Database\Seeder;
use App\Zlecenie;

class ZleceniaTableSeeder extends Seeder
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
    $zlecenia = new Zlecenie();
      $zlecenia->data_zlecenia = $faker->date;
      $zlecenia->data_rozpoczecia = $faker->date;
      $zlecenia->data_zakonczenia = $faker->date;
      $zlecenia->nazwa = $faker->company;
      $zlecenia->rodzaj_uslugi = $faker->randomElement($array = array ('awaria','montaż','przegląd kwartalny','przegląd połroczy',
      'naprawa gwarancyjna','naprawa pogwarancyjna','inne'));
      $zlecenia->rodzaj_instalacji = $faker->randomElement($array = array ('hydraulika','klimatyzacja','wentylacja','elektyrczne',
      'przemysłowe','inne'));
      $zlecenia->zleceniodawca_id = $faker->randomDigitNotNull;
      $zlecenia->kilometry = $faker->randomDigitNotNull;
      $zlecenia->kilometry_koszt= $faker->randomDigitNotNull;
      $zlecenia->opis = $faker->text(100);
      $zlecenia->czy_zrealizowane = $faker->boolean;
      $zlecenia->kto_zrealizowal = $faker->randomDigit;
      $zlecenia->save();

}
    }
}
