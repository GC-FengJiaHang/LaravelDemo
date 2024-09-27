<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->bigIncrements('id', true)->comment("id");
            $table->string('name')->nullable()->index()->comment("名字");
            $table->integer('age')->nullable()->comment("年龄");
            $table->integer('gender')->nullable()->comment("性别{1:男, 2:女}");
            $table->string('hobby')->comment("爱好");
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
        Schema::dropIfExists('student');
    }
}
