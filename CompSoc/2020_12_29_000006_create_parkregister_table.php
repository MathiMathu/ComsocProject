<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkregisterTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'parkregister';

    /**
     * Run the migrations.
     * @table parkregister
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('BookID');
            $table->string('Name', 50);
            $table->string('RegistrationNo', 12);
            $table->string('Event', 50);

            $table->index(["RegistrationNo"], 'RegNo5_idx');


            $table->foreign('RegistrationNo', 'RegNo5_idx')
                ->references('RegistrationNo')->on('students')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
