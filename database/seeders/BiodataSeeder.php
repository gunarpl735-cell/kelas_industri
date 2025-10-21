<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('biodatas')->insert([
            [
                'nama_lengkap' => 'guna',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2008-10-10',
                'tempat_lahir' => 'garut',
                'agama' => 'islam',
                'alamat' => 'bojong',
                'telepon' => '0876378283',
                'email' => 'guna@gmail.com',
            ],
            [
                'nama_lengkap' => 'eja',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2008-10-10',
                'tempat_lahir' => 'garut',
                'agama' => 'islam',
                'alamat' => 'bojong',
                'telepon' => '0876378257',
                'email' => 'eja@gmail.com',
            ],
            [
                'nama_lengkap' => 'ilham',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2008-10-11',
                'tempat_lahir' => 'garut',
                'agama' => 'islam',
                'alamat' => 'bojong',
                'telepon' => '087638687',
                'email' => 'ilham@gmail.com',
            ],
            [
                'nama_lengkap' => 'galang',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2008-09-10',
                'tempat_lahir' => 'garut',
                'agama' => 'islam',
                'alamat' => 'bojong',
                'telepon' => '0876335567',
                'email' => 'galang@gmail.com',
            ],
             [
                'nama_lengkap' => 'jauf',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2008-08-10',
                'tempat_lahir' => 'garut',
                'agama' => 'islam',
                'alamat' => 'bojong',
                'telepon' => '0876334554',
                'email' => 'jauf@gmail.com',
            ],
             [
                'nama_lengkap' => 'fadil',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2008-07-10',
                'tempat_lahir' => 'garut',
                'agama' => 'islam',
                'alamat' => 'bojong',
                'telepon' => '0832335567',
                'email' => 'fadil@gmail.com',
            ],
             [
                'nama_lengkap' => 'ipat',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2008-06-10',
                'tempat_lahir' => 'garut',
                'agama' => 'islam',
                'alamat' => 'bojong',
                'telepon' => '087635567',
                'email' => 'ipat@gmail.com',
            ],
             [
                'nama_lengkap' => 'alif',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2008-09-15',
                'tempat_lahir' => 'garut',
                'agama' => 'islam',
                'alamat' => 'bojong',
                'telepon' => '0876335567',
                'email' => 'alif@gmail.com',
            ],
             [
                'nama_lengkap' => 'teguh',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2008-09-20',
                'tempat_lahir' => 'garut',
                'agama' => 'islam',
                'alamat' => 'bojong',
                'telepon' => '0876335333',
                'email' => 'teguh@gmail.com',
            ],
             [
                'nama_lengkap' => 'bara',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '2008-09-21',
                'tempat_lahir' => 'garut',
                'agama' => 'islam',
                'alamat' => 'bojong',
                'telepon' => '0876335444',
                'email' => 'bara@gmail.com',
            ],
        ]);  
    }
}
