<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $region = [
            ['id' => 1,'nama_wilayah'=> 'Sumatera'],
            ['id' => 2,'nama_wilayah'=> 'Jawa dan Bali'],
            ['id' => 3,'nama_wilayah'=> 'Kalimantan'],
            ['id' => 4,'nama_wilayah'=> 'Sulawesi'],
            ['id' => 5,'nama_wilayah'=> 'Maluku dan Papua'],
        ];

        DB::table('regions')->insert($region);
    }
}
