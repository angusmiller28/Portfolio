<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
          $table->increments('id')->unsigned();
          $table->integer('resume_fk')->unsigned();
          $table->string('name');
          $table->string('start_date');
          $table->string('end_date');
          $table->string('institution');
          $table->string('gpa');
          $table->timestamps();

          //$table->foreign('resume_fk')->references('id')->on('resumes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educations');
    }
}
