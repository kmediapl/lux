<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZleceniaMaterialyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zlecenia_materialy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('zlecenia_id')->unsigned()->nullable();
            $table->foreign('zlecenia_id')->references('id')->on('zlecenia')->onDelete('cascade');
            $table->integer('material_id')->unsigned()->nullable();
            $table->foreign('material_id')->references('id')->on('materialy')->onDelete('cascade');
            $table->integer('cena_materialu')->nullable();
            $table->integer('cena_dla_klienta')->nullable();
            $table->string('jednostka')->nullable();
            $table->integer('ilosc')->nullable();
            $table->boolean('czy_zablokowane')->default($value = false);
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
        Schema::dropIfExists('zlecenia_materialy');
    }
}
