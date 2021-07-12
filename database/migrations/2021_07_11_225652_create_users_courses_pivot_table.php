<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersCoursesPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_courses', function (Blueprint $table) {
           $table->bigInteger('user_id')->unsigned();
           $table->bigInteger('course_id')->unsigned();

           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_courses');
    }
}
