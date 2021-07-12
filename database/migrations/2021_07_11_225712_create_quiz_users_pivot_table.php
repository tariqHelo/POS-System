<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizUsersPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_users', function (Blueprint $table) {
           $table->bigInteger('user_id')->unsigned();
           $table->bigInteger('quiz_id')->unsigned();

           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           $table->foreign('quiz_id')->references('id')->on('quizzes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_users');
    }
}
