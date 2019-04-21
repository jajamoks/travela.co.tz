<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("bus_name");
            $table->string("to_place")->nullable();
            $table->string("from_place")->nullable();
            $table->time('arrival_time')->nullable();
            $table->time('departure_time')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('routes');
    }
}
