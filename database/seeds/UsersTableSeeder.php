<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
            'name' => 'Angus Miller',
            'email' => 'angus.miller28@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
