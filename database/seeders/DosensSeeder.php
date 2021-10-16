<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DosensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nipd' => "123", 'nama' => "Agung", 'alamat' => "Rancamanyar"],
            ['nipd' => "124", 'nama' => "Ute", 'alamat' => "Cibiru"],
            ['nipd' => "125", 'nama' => "Bayu", 'alamat' => "Palasari"],
            ['nipd' => "126", 'nama' => "Chandra", 'alamat' => "Dayeuhkolot"],
            ['nipd' => "127", 'nama' => "Mulki", 'alamat' => "Balaendah"],
        ];

        DB::table('dosens')->insert($post);

    }
}
