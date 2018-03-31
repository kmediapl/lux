<?php

use Illuminate\Database\Seeder;
use App\Zleceniodawca;

class ZleceniodawcyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();
  $faker->addProvider(new Faker\Provider\pl_PL\Person($faker));
    for ($i=0;$i<99;$i++){
    $zleceniodawca = new Zleceniodawca();

      $zleceniodawca ->nazwa = $faker->company;
      $zleceniodawca ->ulica = $faker->streetName;
      $zleceniodawca ->nrdomulokalu = $faker->buildingNumber;
      $zleceniodawca ->kodpocztowy = $faker->postcode;
      $zleceniodawca ->miejscowosc = $faker->city;
      $zleceniodawca ->telefon = $faker->e164PhoneNumber;
      $zleceniodawca ->email = $faker->companyEmail;
      $zleceniodawca ->nip = $faker->taxpayerIdentificationNumber;

      $zleceniodawca ->save();

}
    }
}
