<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'article';

    /**
     * Run the migrations.
     * @table article
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ArticleID');
            $table->string('RegistrationNo', 12);
            $table->string('Name', 50);
            $table->string('Title', 50);
            $table->tinyInteger('Status');

            $table->index(["RegistrationNo"], 'RegNo1_idx');


            $table->foreign('RegistrationNo', 'RegNo1_idx')
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
