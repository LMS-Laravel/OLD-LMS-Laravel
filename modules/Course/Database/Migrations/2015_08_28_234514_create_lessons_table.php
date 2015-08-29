<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('title');
            $table->longText('content');
            $table->string('resource')->nullable(); //is video then id video
            $table->string('download')->nullable(); //file for download
            // 1 is video
            $table->boolean('type')->default(1); //type lessons 1 is video, 0 is letter
            $table->integer('module_id')->unsigned();
            $table->integer('teacher_id')->unsigned();;

            //foreign key
            $table->foreign('module_id')->references('id')->on('modules');
            $table->foreign('teacher_id')->references('id')->on('users');

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
        Schema::drop('lessons');
    }

}
