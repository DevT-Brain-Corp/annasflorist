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
        $this->call(AtmTableSeeder::class);
        $this->call(PotsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SalesTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
    }
}
