<?php

use App\User;
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
    }
}
