<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //memanggil data yang akan dikirim ke db
        $this->call(PostsSeeder::class);

        $this->call(DosensSeeder::class);
        $this->call(MahasiswasSeeder::class);

        $this->call(BarangsSeeder::class);
        $this->call(PembeliansSeeder::class);
        $this->call(PembelisSeeder::class);
        $this->call(PesanansSeeder::class);
        $this->call(SupliersSeeder::class);

        $this->command->info("Sample Data Sudah Terisi");
    }
}
