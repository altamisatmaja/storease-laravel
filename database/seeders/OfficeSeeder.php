<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offices = [
            ['nama_kantor' => 'Office A', 'region_id' => 1, 'refrence_to_offices_id' => null], // Kantor Pusat
            ['nama_kantor' => 'Office B', 'region_id' => 2, 'refrence_to_offices_id' => 1], // Kantor Cabang
            ['nama_kantor' => 'Office C', 'region_id' => 3, 'refrence_to_offices_id' => null], // Kantor Cabang
            ['nama_kantor' => 'Office D', 'region_id' => 4, 'refrence_to_offices_id' => null], // Kantor Pusat
            ['nama_kantor' => 'Office E', 'region_id' => 5, 'refrence_to_offices_id' => 3], // Kantor Pusat
        ];

        DB::table('offices')->insert($offices);
    }
}
