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
        Schema::create('movie_directors', function (Blueprint $table) {
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('director_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('director_id')->references('id')->on('directors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movie_directors', function (Blueprint $table) {
            $table->dropForeign('movie_directors_movie_id_foreign');
            $table->dropForeign('movie_directors_director_id_foreign');
        });
        Schema::dropIfExists('movie_directors');
    }
};
