<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materialy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_zlecenia')->unsigned();
            $table->string('nazwa');
            $table->string('opis');
            $table->string('cena_zakupu');
            $table->string('cena_dla_klienta');
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
        Schema::dropIfExists('materialy');
    }
}
