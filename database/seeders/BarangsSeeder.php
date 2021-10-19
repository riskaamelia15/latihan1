<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BarangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nama' => "Susu", 'varian' => "Minuman", 'harga_beli' => 11000, 'harga_jual' => 21000],
            ['nama' => "Beras", 'varian' => "Makanan", 'harga_beli' => 12000, 'harga_jual' => 22000],
            ['nama' => "Terigu", 'varian' => "Makanan", 'harga_beli' => 13000, 'harga_jual' => 23000],
            ['nama' => "Daging Ayam", 'varian' => "Makanan", 'harga_beli' => 14000, 'harga_jual' => 24000],
            ['nama' => "Sirup Buah", 'varian' => "Minuman", 'harga_beli' => 15000, 'harga_jual' => 25000],
        ];

        DB::table('barangs')->insert($post);

    }
}
