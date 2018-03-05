<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->increments('id_utilisateur');
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->string('genre', 10);
            $table->string('pseudo', 30);
            $table->string('email', 70);
            $table->longText('hash_Pass');
            $table->string('img_profil',100);
            $table->longText('description');
            $table->string('tel', 15);
            $table->boolean('en_ligne');
            $table->boolean('notification');
            $table->date('date_naiss');
            $table->rememberToken();
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
        Schema::dropIfExists('utilisateurs');
    }
}
