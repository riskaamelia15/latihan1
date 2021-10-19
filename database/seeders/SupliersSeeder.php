<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SupliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nama' => "Diny Nuraeni", 'alamat' => "Jl.Enam", 'kode_pos' => 12346, 'kota' => "Bandung"],
            ['nama' => "Amelia Novariani", 'alamat' => "Jl.Tujuh", 'kode_pos' => 12347, 'kota' => "Jakarta"],
            ['nama' => "Lusi Fitriana", 'alamat' => "Jl.Delapan", 'kode_pos' => 12348, 'kota' => "Solo"],
            ['nama' => "Fitriyani Putri", 'alamat' => "Jl.Sembilan", 'kode_pos' => 12349, 'kota' => "Surabaya"],
            ['nama' => "Risma Fadilah", 'alamat' => "Jl.Sepuluh", 'kode_pos' => 12340, 'kota' => "Bogor"],
        ];

        DB::table('supliers')->insert($post);

    }
}
