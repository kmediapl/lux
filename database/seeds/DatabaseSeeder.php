<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
         UsersTableSeeder::class,
         ZleceniaTableSeeder::class,
         ZleceniodawcyTableSeeder::class,
         MaterialyTableSeeder::class,
         ObiektyTableSeeder::class,
         RodzajeinstalacjiTableSeeder::class,
         RodzajeuslugTableSeeder::class
     ]);
    }
}
