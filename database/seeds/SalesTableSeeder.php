<?php

use Illuminate\Database\Seeder;
use App\Product;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_image'=>'1590478427udin.jpg',
            'product_name'=>'Ayam Goreng',
            'product_slug'=>'ayam_goreng',
            'product_description'=>'ini ayam goreng mantap betul hehhe',
            'product_price'=> 20000,
            'product_stock'=>2,
            'product_status'=>1,
            'category_id'=>1,
        ]);
    }
}
