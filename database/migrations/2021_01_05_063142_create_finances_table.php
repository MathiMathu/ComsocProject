<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('RegistrationNo');
            $table->string('Name');
            $table->string('MonthlyIncome');
            $table->string('NoOfSliblings');
            $table->string('email');
            $table->string('FatherName');
            $table->string('FatherOccupation');
            $table->string('MotherName');
            $table->string('motherOccupation');
            $table->string('action');
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
        Schema::dropIfExists('finances');
    }
}
