<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->on('users')->onDelete('cascade');
            $table->foreignId('teacher_id')->on('teachers')->onDelete('cascade');
            $table->foreignId('course_id')->on('courses')->onDelete('cascade');
            $table->foreignId('class_id')->on('class_rooms')->onDelete('cascade');
            $table->foreignId('score_id')->on('scores')->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
}
