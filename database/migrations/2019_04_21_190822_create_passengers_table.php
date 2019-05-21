<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassengersTable extends Migration
{
    public function up()
    {
        Schema::create('passengers', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer("ticket_id")->nullable();
          $table->string("name");
          $table->string("email")->nullable();
          $table->integer("number")->nullable();
          $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('passengers');
    }
}
