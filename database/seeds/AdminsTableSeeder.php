<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('admins')->insert([
        'name' => 'Angus Miller',
        'email' => 'angus.miller28@gmail.com',
        'job_title' => 'Student',
        'password' => bcrypt('secret'),
      ]);

      DB::table('admins')->insert([
        'name' => 'Kevin Miller',
        'email' => 'kevin.miller28@gmail.com',
        'job_title' => 'Student',
        'password' => bcrypt('secret'),
      ]);
    }
}
