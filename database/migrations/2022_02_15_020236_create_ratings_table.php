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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('movie_id');
            $table->integer('rating');
            $table->string('username');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('movie_id')->references('id')->on('movies');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ratings', function (Blueprint $table) {
            $table->dropForeign('ratings_movie_id_foreign');
        });
        Schema::dropIfExists('ratings');
    }
};
