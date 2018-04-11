<?php

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('blogs')->insert([
            'name' => 'Blog Name',
            'created_on' => '11/04/2018',
            'description' => 'Project description',
            'content' => '<p>Project content</p>',
            'theme_colour' => '#6bd9ed',
            'admin_fk' => 1,
            'cover_image' => 'TestCoverImage.png',
            'display_image' => 'TestDisplayImageFront.png',
            'facebook_share_flag' => 1,
            'twitter_share_flag' => 1,
            'reddit_share_flag' => 1,
            'email_share_flag' => 1,
            'facebook_share_flag' => 1,
        ]);
    }
}
