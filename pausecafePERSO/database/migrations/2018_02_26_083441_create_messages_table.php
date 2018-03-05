<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->integer('id_utilisateur');
            $table->integer('id_utilisateur_Utilisateur');
            $table->dateTime('date_envoi');
            $table->longText('messages');
            $table->timestamp('datecreation');
            $table->primary(array('id_utilisateur','id_utilisateur_Utilisateur'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
