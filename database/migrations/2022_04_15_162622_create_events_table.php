<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
         /*Table of Columns for events Table*/
         $table->increments('eventID');
         $table->integer('staffInCharge')->references('staffID')->on('staff');
         $table->string('eventName');
         $table->integer('numberOfParticipants');
         $table->integer('seatsAvailable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
