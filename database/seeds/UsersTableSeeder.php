<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();

    for ($i=0;$i<10;$i++){
        $pracownik = new User();

         $pracownik->name = $faker->name;
         $pracownik->email = $faker->unique()->safeEmail;
         $pracownik->password = bcrypt('secret');
         $pracownik->remember_token = str_random(100);
         $pracownik->imie = $faker->name;
         $pracownik->nazwisko = $faker->company;
         $pracownik->uwagi = $faker->text(100);
         $pracownik->stanowisko= $faker->text(20);



          $pracownik->save();

    }
    }
}
