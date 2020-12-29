<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'subject';

    /**
     * Run the migrations.
     * @table subject
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('SeminarID');
            $table->string('RegistrationNo', 12);
            $table->string('SubjectName', 50);

            $table->index(["SeminarID"], 'SeminarID_idx');

            $table->index(["RegistrationNo"], 'RegNo2_idx');


            $table->foreign('RegistrationNo', 'RegNo2_idx')
                ->references('RegistrationNo')->on('students')
                ->onDelete('restrict')
                ->onUpdate('cascade');

            $table->foreign('SeminarID', 'SeminarID_idx')
                ->references('SeminarID')->on('seminar')
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
