<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToImgForeignOfUsrAndLieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->foreign('id_utilisateur')->references('id_utilisateur')->on('utilisateurs');
            $table->foreign('id_lieu')->references('id_lieu')->on('lieus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign('images_id_utilisateur_foreign');
            $table->dropForeign('images_id_lieu_foreign');   //
        });
    }
}
