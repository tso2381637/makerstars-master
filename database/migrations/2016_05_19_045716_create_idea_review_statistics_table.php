<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeaReviewStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idea_review_statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idea_id')->unsigned();
            $table->foreign('idea_id')->references('id')->on('ideas');
            $table->integer('one_stars')->unsigned()->default(0);
            $table->integer('two_stars')->unsigned()->default(0);
            $table->integer('thr_stars')->unsigned()->default(0);
            $table->integer('fou_stars')->unsigned()->default(0);
            $table->integer('fiv_stars')->unsigned()->default(0);
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('idea_review_statistics');
    }
}
