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
        Schema::create('classroom_student', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classroom_id')->constrained();
            $table->foreignId('student_id')->constrained();            
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
        Schema::table('classroom_student', function (Blueprint $table) {            
            $table->dropForeign('classroom_student_classroom_id_foreign');
            $table->dropForeign('classroom_student_student_id_foreign');
        });

        Schema::dropIfExists('classroom_student');
    }
}
