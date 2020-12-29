<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancesupportTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'financesupport';

    /**
     * Run the migrations.
     * @table financesupport
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('RegistrationNo', 12);
            $table->string('Name', 50);
            $table->decimal('MonthlyIncome', 8, 2);
            $table->tinyInteger('NoOfSiblings');
            $table->string('FatherName', 50);
            $table->string('FatherOccupation', 50)->nullable()->default(null);
            $table->string('MotherName', 50);
            $table->string('MotherOccupation', 50)->nullable()->default(null);

            $table->index(["RegistrationNo"], 'RegNo3_idx');


            $table->foreign('RegistrationNo', 'RegNo3_idx')
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
