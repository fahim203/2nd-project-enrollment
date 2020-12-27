<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_teachers', function (Blueprint $table) {
            $table->increments('teacher_id');
            $table->string('teacher_name');
            $table->string('teacher_phone');
            $table->string('teacher_adderss');
            $table->string('teacher_department');
            $table->string('teacher_image');
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
        Schema::dropIfExists('tbl_teachers');
    }
}
