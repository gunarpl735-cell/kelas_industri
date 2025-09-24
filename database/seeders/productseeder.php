<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
     public function run(): void
   {
        DB::table('products')->insert([
            [
                "name" => "basreng",
                "description" => "basreng enak",
                "price" => 1500,
                "stock" => 100,
            ],
            [
                "name" => "kopi susu",
                "description" => "kopi susu enak",
                "price" => 3500,
                "stock" => 50,
            ],
        ]);
    }
}
