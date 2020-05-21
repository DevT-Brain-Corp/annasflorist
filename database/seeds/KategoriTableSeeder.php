<?php

use \App\Category;
use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_name'=>'sales',
            'category_slug'=>'sales',
        ]);
        Category::create([
            'category_name'=>'souvenir',
            'category_slug'=>'souvenir',
        ]);
        Category::create([
            'category_name'=>'rental',
            'category_slug'=>'rental',
        ]);
        Category::create([
            'category_name'=>'workshop',
            'category_slug'=>'workshop',
        ]);
        Category::create([
            'category_name'=>'dekorasi',
            'category_slug'=>'dekorasi',
        ]);
    }
}
