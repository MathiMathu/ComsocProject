<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialsupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financialsupports', function (Blueprint $table) {
            $table->id();
            $table->string("RegistrationNo",);
            $table->string("Name");
            $table->string("MonthlyIncome");
            $table->string("NoOfSiblings");
            $table->string("FatherName");
            $table->string("FatherOccupation");
            $table->string("MotherName");
            $table->string("MotherOccupation");



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
        Schema::dropIfExists('financialsupports');
    }
}
