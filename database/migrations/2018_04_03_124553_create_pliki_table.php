<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlikiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pliki', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('zlecenia_id')->unsigned()->nullable();
            $table->string('nazwa')->nullable();;
            $table->string('link')->nullable();;
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
        Schema::dropIfExists('pliki');
    }
}
