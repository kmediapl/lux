<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZleceniodawcyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zleceniodawcy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazwa');
            $table->string('ulica');
            $table->string('nrdomulokalu');
            $table->string('kodpocztowy');
            $table->string('miejscowosc');
            $table->string('telefon');
            $table->string('email');
            $table->string('nip');
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
        Schema::dropIfExists('zleceniodawcy');
    }
}
