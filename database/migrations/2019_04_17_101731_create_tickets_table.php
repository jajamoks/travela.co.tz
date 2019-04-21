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
            $table->integer('bus_id');
            $table->integer('amount');
            $table->string('toPlace');
            $table->string('issuedBy');
            $table->string('fromPlace');
            $table->string('customerName');
            $table->string('additinalInfo');
            $table->timestamp('bookedDate');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
