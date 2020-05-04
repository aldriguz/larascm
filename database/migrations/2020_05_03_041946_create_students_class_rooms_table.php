<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsClassRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_classrooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->foreignId('classroom_id')->constrained();
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
        Schema::create('students_classrooms', function (Blueprint $table) {            
            $table->dropForeign('students_classrooms_student_id_foreign');
            $table->dropForeign('students_classrooms_classroom_id_foreign');
        });

        Schema::dropIfExists('students_classrooms');
    }
}
