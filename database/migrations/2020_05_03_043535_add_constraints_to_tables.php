<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConstraintsToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('managers', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });

        Schema::table('teachers', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });

        Schema::table('classrooms', function (Blueprint $table) {
            $table->foreignId('teacher_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('managers', function (Blueprint $table) {
            $table->dropForeign('managers_user_id_foreign');
            $table->dropColumn('user_id');
        });

        Schema::table('teachers', function (Blueprint $table) {
            $table->dropForeign('teachers_user_id_foreign');
            $table->dropColumn('user_id');
        });

        Schema::table('classrooms', function (Blueprint $table) {
            $table->dropForeign('classrooms_teacher_id_foreign');
            $table->dropColumn('teacher_id');
        });
    }
}
