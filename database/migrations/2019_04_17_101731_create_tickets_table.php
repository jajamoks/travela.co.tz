<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('issuedBy');
            $table->integer('route_id');
            $table->timestamp('bookedDate');
            $table->integer('bus_id')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('passenger_id')->nullable();
            $table->string('additionalInfo')->default('None');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
