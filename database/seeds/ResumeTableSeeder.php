<?php

use Illuminate\Database\Seeder;

class ResumeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('resumes')->insert([
        'description' => 'Hi my name is Angus Miller. I have just
                          successfully completed my study of
                          Bachelor of Science Computing. Having
                          gained a firm experience in a wide
                          variety of IT fields such as Networking,
                          Security, Programming, Database theory
                          and Business System Analysis and
                          design,. I have the passion, commitment
                          and skills to target the requirement of
                          your organisation.',

        'cover_letter' => 'Cover letter',
        'email' => 'angus.miller28@gmail.com',
        'address' => '12 228 Vulture St South Brisbane Queensland 4101',
        'transcript' => 'https://tinyurl.com/yd86u68g',
        'phone' => '0423 584 163',
        'facebook_name' => 'Angus Miller',
        'facebook_link' => 'https://www.facebook.com/angus.miller.92?ref=bookmarks',
        'linkedin_name' => 'Angus Miller',
        'linkedin_link' => 'https://www.facebook.com/angus.miller.92?ref=bookmarks',
        'github_name' => 'Angus Miller',
        'github_link' => 'https://www.facebook.com/angus.miller.92?ref=bookmarks',
        'twitter_name' => 'Angus Miller',
        'twitter_link' => 'https://www.facebook.com/angus.miller.92?ref=bookmarks',
        'google_name' => 'Angus Miller',
        'google_link' => 'https://www.facebook.com/angus.miller.92?ref=bookmarks',
        'reddit_name' => 'Angus Miller',
        'reddit_link' => 'https://www.facebook.com/angus.miller.92?ref=bookmarks',
      ]);
    }
}
