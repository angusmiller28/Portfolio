<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->text('description');
            $table->text('cover_letter')->nullable();
            $table->string('email');
            $table->string('address');
            $table->string('transcript');
            $table->string('phone');
            $table->string('facebook_link')->nullable();
            $table->string('facebook_name')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('linkedin_name')->nullable();
            $table->string('github_link')->nullable();
            $table->string('github_name')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('twitter_name')->nullable();
            $table->string('google_link')->nullable();
            $table->string('google_name')->nullable();
            $table->string('reddit_link')->nullable();
            $table->string('reddit_name')->nullable();
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
        Schema::dropIfExists('resumes');
    }
}
