<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonUserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_user', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->integer('lesson_id')->unsigned();

            $table->foreign('lesson_id')->references('id')->on('lessons');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lesson_user');
    }

}
