<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PesanansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nama_pembeli' => "Riska Amelia", 'nama_barang' => "Susu", 'qty' => 11, 'tgl_pesan' => "2021-01-21"],
            ['nama_pembeli' => "Fani Ramadhanti", 'nama_barang' => "Beras", 'qty' => 12, 'tgl_pesan' => "2021-02-22"],
            ['nama_pembeli' => "Salsabila Daranti", 'nama_barang' => "Terigu", 'qty' => 13, 'tgl_pesan' => "2021-03-23"],
            ['nama_pembeli' => "Maudy Meilisa", 'nama_barang' => "Daging Ayam", 'qty' => 14, 'tgl_pesan' => "2021-04-24"],
            ['nama_pembeli' => "Syifa Siti", 'nama_barang' => "Sirup Buah", 'qty' => 15, 'tgl_pesan' => "2021-05-25"],
        ];

        DB::table('pesanans')->insert($post);

    }
}
