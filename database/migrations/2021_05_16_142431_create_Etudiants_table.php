<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Etudiants', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nom');
			$table->string('prenom');
			$table->string('adresse');
			$table->string('mail');
			$table->string('login');
			$table->string('mdp');
			$table->integer('tel');
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
        Schema::dropIfExists('Etudiants');
    }
}
