<?php

use Illuminate\Database\Seeder;
use \App\KategoriTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
//<<<<<<< HEAD
//        $this->call(CategoryTableSeeder::class);
//=======
//        // $this->call(KategoriTableSeeder::class);
//>>>>>>> 0d1e398768b4b9d5951d367e04ca860d072bedd9
    }
}
