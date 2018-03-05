<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignAmi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ami', function (Blueprint $table) {
            $table->foreign('id_utilisateur')->references('id_utilisateur')->on('utilisateurs');
            $table->foreign('id_utilisateur_Utilisateur')->references('id_utilisateur')->on('utilisateurs');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ami', function (Blueprint $table) {
            $table->dropForeign('utilisateurs_id_utilisateur_foreign');
            $table->dropForeign('utilisateurs_id_utilisateur_Utilisateur_foreign');
        });
    }
}