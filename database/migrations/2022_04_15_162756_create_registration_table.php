<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
        /*Table of Columns for registration Table*/
        $table->increments('registrationID');
        $table->integer('memberID');
        $table->string('fName');
        $table->string('lName');
        $table->boolean('event');
        $table->boolean('eventID')->references('eventID')->on('events');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registration');
    }
};
