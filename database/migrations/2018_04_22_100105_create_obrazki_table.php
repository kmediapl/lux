<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObrazkiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obrazki', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazwaobrazka');
            $table->string('link');
            $table->integer('user_id')->unsigned()->nullable();;
            $table->integer('zlecenie_id')->unsigned()->nullable();;
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
        Schema::dropIfExists('obrazki');
    }
}
