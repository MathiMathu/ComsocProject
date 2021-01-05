<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTimeLocationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_time_location_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('EventId');
            $table->string('StartDate');
            $table->string('StartTime');
            $table->string('Guest');
            $table->string('Venue');
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
        Schema::dropIfExists('event_time_location_details');
    }
}
