<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('code');
			$table->string('description');
			$table->integer('nbrHeure');
			$table->integer('coeffDiplome');
			$table->integer('coeffExam');
			$table->integer('coeffTD');
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
        Schema::dropIfExists('cours');
    }
}
