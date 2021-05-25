<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Enseignants', function (Blueprint $table) {
          $table->increments('id');
			$table->string('nom');
			$table->string('prenom');
			$table->integer('code');
			$table->set('grade', ['PR', 'MCF', 'Contractue']);
			$table->integer('tel');
			$table->string('mail');
			$table->integer('numB');
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
        Schema::dropIfExists('Enseignants');
    }
}
