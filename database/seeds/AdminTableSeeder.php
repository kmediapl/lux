<?php

use Illuminate\Database\Seeder;
use \App\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
  
    
          $pracownik = new User();
  
           $pracownik->name = 'kmedia';
           $pracownik->email = 'lk@lk.pl';
           $pracownik->password = bcrypt('1qaz2wsx');
           $pracownik->remember_token = str_random(100);
           $pracownik->imie = 'Łukasz';
           $pracownik->nazwisko = 'K';
           $pracownik->uwagi = $faker->text(100);
           $pracownik->stanowisko= $faker->text(20);
           $pracownik->isadmin = 1;
           $pracownik->czy_aktywny=1;
  
  
  
            $pracownik->save();
  
     
      }
}
