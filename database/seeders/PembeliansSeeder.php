<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembeliansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nama_barang' => "Susu", 'nama_suplier' => "Diny Nuraeni", 'qty' => 110, 'tgl' => "2021-01-21"],
            ['nama_barang' => "Beras", 'nama_suplier' => "Amelia Novariani", 'qty' => 120, 'tgl' => "2021-01-21"],
            ['nama_barang' => "Terigu", 'nama_suplier' => "Lusi Fitriana", 'qty' => 130, 'tgl' => "2021-01-21"],
            ['nama_barang' => "Daging Ayam", 'nama_suplier' => "Fitriyani Putri", 'qty' => 140, 'tgl' => "2021-01-21"],
            ['nama_barang' => "Sirup Buah", 'nama_suplier' => "Risma Fadilah", 'qty' => 150, 'tgl' => "2021-01-21"],
        ];

        DB::table('pembelians')->insert($post);

    }
}
