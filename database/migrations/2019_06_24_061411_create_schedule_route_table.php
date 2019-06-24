<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleRouteTable extends Migration
{
    public function up()
    {
        Schema::create('schedule_route', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('schedule_id')->unsigned();
            $table->integer('route_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('schedule_route');
    }
}
