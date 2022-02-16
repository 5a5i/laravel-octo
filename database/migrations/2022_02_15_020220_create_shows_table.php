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
        Schema::create('shows', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('theater_id');
            $table->integer('theater_room_no');
            $table->dateTimeTz('start_time');
            $table->dateTimeTz('end_time');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('theater_id')->references('id')->on('theaters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shows', function (Blueprint $table) {
            $table->dropForeign('shows_movie_id_foreign');
            $table->dropForeign('shows_theater_id_foreign');
        });
        Schema::dropIfExists('shows');
    }
};
