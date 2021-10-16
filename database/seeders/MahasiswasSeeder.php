<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class MahasiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nim' => "343", 'nama' => "Lusi", 'jurusan' => "Parawisata", 'wali' => "Herna"],
            ['nim' => "344", 'nama' => "Yogi", 'jurusan' => "TKRO", 'wali' => "Ute"],
            ['nim' => "345", 'nama' => "Amelia", 'jurusan' => "Farmasi", 'wali' => "Agung"],
            ['nim' => "346", 'nama' => "Diny", 'jurusan' => "TI", 'wali' => "Chandra"],
            ['nim' => "347", 'nama' => "Aldevin", 'jurusan' => "Tataboga", 'wali' => "Mulki"],
        ];

        DB::table('mahasiswas')->insert($post);

    }
}
