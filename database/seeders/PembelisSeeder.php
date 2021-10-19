<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembelisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nama' => "Riska Amelia", 'jns_kelamin' => "Perempuan", 'alamat' => "Jl.Satu", 'kode_pos' => 12341, 'kota' => "Bandung", 'tgl_lahir' => "1991-01-21"],
            ['nama' => "Fani Ramadhanti", 'jns_kelamin' => "Perempuan", 'alamat' => "Jl.Dua", 'kode_pos' => 12342, 'kota' => "Jakarta", 'tgl_lahir' => "1992-02-22"],
            ['nama' => "Salsabila Daranti", 'jns_kelamin' => "Perempuan", 'alamat' => "Jl.Tiga", 'kode_pos' => 12343, 'kota' => "Solo", 'tgl_lahir' => "1993-03-23"],
            ['nama' => "Maudy Meilisa", 'jns_kelamin' => "Perempuan", 'alamat' => "Jl.Empat", 'kode_pos' => 12344, 'kota' => "Surabaya", 'tgl_lahir' => "1994-04-24"],
            ['nama' => "Syifa Siti", 'jns_kelamin' => "Perempuan", 'alamat' => "Jl.Lima", 'kode_pos' => 12345, 'kota' => "Bogor", 'tgl_lahir' => "1995-05-25"],
        ];

        DB::table('pembelis')->insert($post);

    }
}
