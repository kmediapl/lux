<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
          $table->string('email')->unique();
          $table->string('password');
          $table->string('imie')->nullable();
          $table->string('nazwisko')->nullable();
          $table->string('stanowisko')->nullable();
          $table->integer('stawka_za_godzine')->nullable();
          $table->string('uwagi')->nullable();
          $table->boolean('isadmin')->nullable();
          $table->boolean('czy_aktywny')->nullable();
          $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
