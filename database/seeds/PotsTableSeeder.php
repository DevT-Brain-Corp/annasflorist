<?php

use Illuminate\Database\Seeder;
use App\Pot;

class PotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pot::create([
            'id' => 1,
            'pot_image' => ('1588252689.png'),
            'pot_color' => 'Pink',
            'pot_stock' => 11,
        ]);
        Pot::create([
                'id' => 2,
                'pot_image' => ('1588252729.png'),
                'pot_color' => 'Merah',
                'pot_stock' => 11,
            ]);
        Pot::create([
            'id' => 3,
            'pot_image' => ('1588252729.png'),
            'pot_color' => 'Kuning',
            'pot_stock' => 11,
        ]);
    }
}
