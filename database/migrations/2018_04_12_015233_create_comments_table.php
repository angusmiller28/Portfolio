<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
          $table->increments('id')->unsigned();
          $table->integer('blog_id')->unsigned();
          $table->integer('admin_id')->unsigned()->nullable;
          $table->integer('user_id')->unsigned()->nullable;
          $table->text('comment');
          $table->boolean('approved');
          $table->timestamps();
        });

        Schema::table('comments', function ($table){
          $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
