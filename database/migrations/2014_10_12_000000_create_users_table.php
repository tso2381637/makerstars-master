<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('google_id', 255)->nullable();
            $table->string('name', 50);
            $table->string('email', 100)->unique();
            $table->string('avatar')->default('default.jpeg');
            $table->string('password', 255);
            $table->boolean('enabled')->default(true);
            $table->timestamp('disabled_on')->nullable();
            $table->string('profile', 65535)->nullable();
            $table->integer('experience')->unsigned()->default(0);
            $table->string('epithet', 255)->default('創坑初心者');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
