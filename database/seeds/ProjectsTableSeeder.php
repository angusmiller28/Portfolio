<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('projects')->insert([
            'name' => 'Project Name',
            'description' => 'Project description',
            'sub_title' => 'Project Subtitle',
            'cover_image' => 'TestCoverImage.jpg',
            'display_image_front' => 'TestDisplayImageFront.jpg',
            'display_image_back' => 'TestDisplayImageBack.jpg',
            'mobile_image' => 'TestMobileImage.jpg',
            'tablet_image' => 'TestTabletImage.jpg',
            'desktop_image' => 'TestDesktopImage.jpg',
            'video' => 'TestVideo.mp4',
        ]);
    }
}
