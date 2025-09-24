<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'tittle' => 'Tips Cepat Pintar',
                'content' => 'lorem ipsum',
            ],
            [
                'tittle' => 'Membangun Visi Misi Sukses',
                'content' => 'lorem ipsum',
            ],
        ]);
    }
}
