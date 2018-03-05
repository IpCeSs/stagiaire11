<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToCommentForeignOfUserImg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {

            $table->foreign('id_utilisateur')->references('id_utilisateur')->on('utilisateurs');

            $table->foreign('id_image')->references('id_image')->on('images');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign('comments_id_utilisateur_foreign');
            $table->dropForeign('comments_id_image_foreign');
        });
    }
}
