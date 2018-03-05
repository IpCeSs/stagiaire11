<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMessagesForeignkey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->foreign('id_utilisateur')->references('id_utilisateur')->on('Utilisateur');
            $table->foreign('id_utilisateur_Utilisateur')->references('id_utilisateur')->on('Utilisateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropForeign('id_utilisateur_foreign');
            $table->dropForeign('id_utilisateur_Utilisateur_foreign');
        });
    }
}
