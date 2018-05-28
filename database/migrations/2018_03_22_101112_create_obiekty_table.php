<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObiektyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obiekty', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazwa');
            $table->string('ulica');
            $table->string('nrdomulokalu');
            $table->string('kodpocztowy');
            $table->string('miejscowosc');
            $table->string('osoba_kontaktowa')->nullable();;
            $table->string('telefon');
            $table->string('uwagi');
            $table->integer('zleceniodawca_id')->unsigned();
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
        Schema::dropIfExists('obiekty');
    }
}
