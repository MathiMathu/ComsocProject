<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeminarTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'seminar';

    /**
     * Run the migrations.
     * @table seminar
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('SeminarID');
            $table->string('RegistrationNo', 12);
            $table->string('Name', 50);
            $table->string('Place', 50);
            $table->date('Date');
            $table->string('Language', 30);

            $table->index(["RegistrationNo"], 'RegNo2_idx');


            $table->foreign('RegistrationNo', 'RegNo2_idx')
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
