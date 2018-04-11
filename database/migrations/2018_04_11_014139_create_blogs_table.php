<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('admin_fk')->unsigned();
            $table->string('created_on');
            $table->string('name');
            $table->string('cover_image');
            $table->string('display_image');
            $table->text('description');
            $table->text('content');
            $table->string('theme_colour');
            $table->boolean('facebook_share_flag')->default(false);
            $table->boolean('twitter_share_flag')->default(false);
            $table->boolean('reddit_share_flag')->default(false);
            $table->boolean('google_share_flag')->default(false);
            $table->boolean('email_share_flag')->default(false);
            $table->timestamps();

            //$table->foreign('admin_fk')->references('id')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
