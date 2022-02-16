<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_performers', function (Blueprint $table) {
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('performer_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('performer_id')->references('id')->on('performers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movie_performers', function (Blueprint $table) {
            $table->dropForeign('movie_performers_movie_id_foreign');
            $table->dropForeign('movie_performers_performer_id_foreign');
        });
        Schema::dropIfExists('movie_performers');
    }
};
