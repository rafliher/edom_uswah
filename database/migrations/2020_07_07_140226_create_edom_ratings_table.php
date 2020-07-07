<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdomRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edom_ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rater_id');
            $table->unsignedBigInteger('rated_id');
            $table->unsignedBigInteger('aspect_id');

            $table->foreign('rater_id')->references('id')->on('members');
            $table->foreign('rated_id')->references('id')->on('members');
            $table->foreign('aspect_id')->references('id')->on('edom_aspects');

            $table->integer('score');
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
        Schema::dropIfExists('edom_ratings');
    }
}
