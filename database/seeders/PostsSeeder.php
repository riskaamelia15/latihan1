<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['title' => "Tajwid Menyenangkan", 'content' => "Lorem Ipsum"],
            ['title' => "Bacaan Sholat", 'content' => "Lorem Ipsum"],
            ['title' => "Juz Amma", 'content' => "Lorem Ipsum"],
        ];

        DB::table('posts')->insert($post);

    }

}
