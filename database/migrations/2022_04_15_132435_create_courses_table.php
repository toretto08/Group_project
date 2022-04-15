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
        Schema::create('courses', function (Blueprint $table) {
        /*Table of Columns for Courses Table*/
        $table->increments('courseID');
        $table->integer('staffInCharge')->references('staffID')->on('staff');
        $table->string('courseName');
        $table->integer('numberOfParticipants');
        $table->integer('seatsAvailable');
        });

        DB::statement('ALTER TABLE courses ADD CONSTRAINT chkParticipants CHECK (numberOfParticipants<=20);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
