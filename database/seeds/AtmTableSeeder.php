<?php

use Illuminate\Database\Seeder;
use \App\Atm;

class AtmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Atm::create([
            'nama_bank'=>'mandiri',
            'logo_bank'=>'img/pengiriman/bank/mandiri.png',
            'no_rekening'=>'kosong',
            'nama_pemilik'=>'tidak tahu',
        ]);
        Atm::create([
            'nama_bank'=>'BRI',
            'logo_bank'=>'img/pengiriman/bank/bri.png',
            'no_rekening'=>'kosong',
            'nama_pemilik'=>'tidak tahu',
        ]);
        Atm::create([
            'nama_bank'=>'BNI',
            'logo_bank'=>'img/pengiriman/bank/bni.png',
            'no_rekening'=>'kosong',
            'nama_pemilik'=>'tidak tahu',
        ]);
        Atm::create([
            'nama_bank'=>'OVO',
            'logo_bank'=>'img/pengiriman/bank/ovo.png',
            'no_rekening'=>'kosong',
            'nama_pemilik'=>'tidak tahu',
            'qr_code'=>'img/pengiriman/bank/barcode.PNG'
        ]);
    }
}
