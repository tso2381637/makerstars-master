<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('edited_by_idea_id')->unsigned()->nullable();
            $table->foreign('edited_by_idea_id')->references('id')->on('ideas');
            $table->integer('user_id')->unsigned();
            //$table->foreign('user_id')->references('id')->on('users');
            $table->integer('category_id')->unsigned();
            //$table->foreign('category_id')->references('id')->on('categories');
            $table->string('state', 255);
            $table->string('title', 50);
            $table->string('content', 65535);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->boolean('edited')->default(false);
            $table->string('banner_image', 255)->nullable();
            $table->boolean('featured')->default(false);
            $table->boolean('private')->default(false);
            $table->boolean('comments_enabled')->default(true);
            $table->boolean('deleted')->default(false);
            $table->timestamp('deleted_on')->nullable();
            $table->double('reviews',3, 2)->nullable();
            $table->integer('views')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ideas');
    }
}
