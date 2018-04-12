<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([
        'name' => 'Product Name',
        'price' => 12.00,
        'display_image' => 'testDisplayImage.png'
      ]);
    }
}
