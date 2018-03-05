<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreationTableAmiForeignOnIdUtilisateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ami', function (Blueprint $table) {
            $table->dateTime('anniversaire_amitie');
            $table->integer('id_utilisateur');
            $table->integer('id_utilisateur_Utilisateur');
            $table->primary(array('id_utilisateur','id_utilisateur_Utilisateur'));
            $table->timestamp('date_creation');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ami');
    }
}
