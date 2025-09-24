<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('siswas')->insert([
            [
                'nama_lengkap' => 'guna',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2008-12-13',
                'kelas' => '11rpl1',
            ],
            [
                'nama_lengkap' => 'ipat',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2009-11-12',
                'kelas' => '11rpl1',
            ],
            [
                'nama_lengkap' => 'eja',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2004-10-10',
                'kelas' => '11rpl1',
            ],
            [
                'nama_lengkap' => 'ilham',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2003-09-09',
                'kelas' => '11rpl1',
            ],
            [
                'nama_lengkap' => 'jauf',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2001-01-17',
                'kelas' => '11rpl1',
            ],
        ]);
    }
}
