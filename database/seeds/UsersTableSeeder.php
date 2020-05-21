<?php

use App\User;
use App\Category;
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
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'phone_number'   => '082233972121',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$3Xvqz59R87I//1nk5CIqx.VboI0FLqkj0q.sciLAL1oiCUfMVgRWe',
                'remember_token' => null,
                'is_admin'       => true,
            ],
        ];

        User::insert($users);

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
