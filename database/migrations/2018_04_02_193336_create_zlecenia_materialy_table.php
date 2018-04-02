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
