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
            $table->string('from_place');
            $table->string('to_place');
            $table->string('customer_name');
            $table->string('additinal_info');
            $table->timestamp('booked_date');
            $table->string('issued_by');
            $table->timestamp('date_issued');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
