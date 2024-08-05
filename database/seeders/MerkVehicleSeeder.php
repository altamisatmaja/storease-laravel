<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerkVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $merk = [
            [
                'nama_merk' => 'Mitsubishi'
            ],
            [
                'nama_merk' => 'Belaz'
            ],
            [
                'nama_merk' => 'Komatsu'
            ],
            [
                'nama_merk' => 'Honda'
            ],
            [
                'nama_merk' => 'Caterpillar'
            ],
        ];

        DB::table('merk_vehicles')->insert($merk);
    }
}
