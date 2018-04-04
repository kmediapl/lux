<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePozycjeZleceniaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pozycje_zlecenia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('zlecenia_id')->unsigned()->nullable();
            $table->integer('material_id')->unsigned()->nullable();
            $table->decimal('cena', 8, 2);
            $table->decimal('cena_dla_klienta', 8, 2);
            $table->string('uwagi')->nullable();
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
        Schema::dropIfExists('pozycje_zlecenia');
    }
}
