<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MiningStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mining_states = [
            ['id' => 1,'nama_tambang'=> 'Tambang Induk VI', 'alamat_lengkap' => 'Sragen', 'region_id' => 1],
            ['id' => 2,'nama_tambang'=> 'Tambang Induk VII', 'alamat_lengkap' => 'Ngawi', 'region_id' => 2],
        ];

        DB::table('mining_states')->insert($mining_states);
    }
}
