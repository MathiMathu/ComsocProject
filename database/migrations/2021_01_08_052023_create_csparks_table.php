<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsparksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csparks', function (Blueprint $table) {
            $table->id();
            $table->string("registration_number", 15);
            $table->string("reason_for_booking" ,50);
            $table->date("booking_date");
            $table->time("booking_time");
            $table->string("duration", 15);
            
            
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
        Schema::dropIfExists('csparks');
    }
}
