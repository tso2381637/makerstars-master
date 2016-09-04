<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeaCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idea_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('edited_by_idea_comment_id')->unsigned()->nullable();
            $table->foreign('edited_by_idea_comment_id')->references('id')->on('idea_comments');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('idea_id')->unsigned();
            $table->foreign('idea_id')->references('id')->on('ideas');
            $table->string('comment', 65535);
            $table->boolean('edited')->default(false);
            $table->boolean('enabled')->default(true);
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('idea_comments');
    }
}
