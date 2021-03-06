<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZleceniaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zlecenia', function (Blueprint $table) {
            $table->increments('id');
           
            $table->date('data_zlecenia');
            $table->dateTime('planowana_data_rozpoczecia')->nullable();
            $table->dateTime('planowana_data_zkonczenia')->nullable();
            $table->dateTime('data_rozpoczecia')->nullable();;
            $table->dateTime('data_zakonczenia')->nullable();;
            $table->string('nazwa');
            $table->string('rodzaj_uslugi');
            $table->string('rodzaj_instalacji');
            $table->integer('zleceniodawca_id')->nullable();
            $table->integer('obiekt_id')->nullable();
            $table->integer('kilometry')->nullable();
            $table->integer('kilometry_koszt')->nullable();
            $table->boolean('czy_zrealizowane')->default($value = false);
            $table->integer('kto_zrealizowal')->nullable();
            $table->string('opis');
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
        Schema::dropIfExists('zlecenia');
    }
}
