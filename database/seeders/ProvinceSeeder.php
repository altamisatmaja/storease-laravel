<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            ['id' => 11, 'nama_provinsi' => 'ACEH', 'region_id' => 1],
            ['id' => 12, 'nama_provinsi' => 'SUMATERA UTARA', 'region_id' => 1],
            ['id' => 13, 'nama_provinsi' => 'SUMATERA BARAT', 'region_id' => 1],
            ['id' => 14, 'nama_provinsi' => 'RIAU', 'region_id' => 1],
            ['id' => 15, 'nama_provinsi' => 'JAMBI', 'region_id' => 1],
            ['id' => 16, 'nama_provinsi' => 'SUMATERA SELATAN', 'region_id' => 1],
            ['id' => 17, 'nama_provinsi' => 'BENGKULU', 'region_id' => 1],
            ['id' => 18, 'nama_provinsi' => 'LAMPUNG', 'region_id' => 1],
            ['id' => 19, 'nama_provinsi' => 'KEPULAUAN BANGKA BELITUNG', 'region_id' => 1],
            ['id' => 21, 'nama_provinsi' => 'KEPULAUAN RIAU', 'region_id' => 1],
            ['id' => 31, 'nama_provinsi' => 'DKI JAKARTA', 'region_id' => 2],
            ['id' => 32, 'nama_provinsi' => 'JAWA BARAT', 'region_id' => 2],
            ['id' => 33, 'nama_provinsi' => 'JAWA TENGAH', 'region_id' => 2],
            ['id' => 34, 'nama_provinsi' => 'DI YOGYAKARTA', 'region_id' => 2],
            ['id' => 35, 'nama_provinsi' => 'JAWA TIMUR', 'region_id' => 2],
            ['id' => 36, 'nama_provinsi' => 'BANTEN', 'region_id' => 2],
            ['id' => 51, 'nama_provinsi' => 'BALI', 'region_id' => 2],
            ['id' => 52, 'nama_provinsi' => 'NUSA TENGGARA BARAT', 'region_id' => 2],
            ['id' => 53, 'nama_provinsi' => 'NUSA TENGGARA TIMUR', 'region_id' => 2],
            ['id' => 61, 'nama_provinsi' => 'KALIMANTAN BARAT', 'region_id' => 3],
            ['id' => 62, 'nama_provinsi' => 'KALIMANTAN TENGAH', 'region_id' => 3],
            ['id' => 63, 'nama_provinsi' => 'KALIMANTAN SELATAN', 'region_id' => 3],
            ['id' => 64, 'nama_provinsi' => 'KALIMANTAN TIMUR', 'region_id' => 3],
            ['id' => 65, 'nama_provinsi' => 'KALIMANTAN UTARA', 'region_id' => 3],
            ['id' => 71, 'nama_provinsi' => 'SULAWESI UTARA', 'region_id' => 4],
            ['id' => 72, 'nama_provinsi' => 'SULAWESI TENGAH', 'region_id' => 4],
            ['id' => 73, 'nama_provinsi' => 'SULAWESI SELATAN', 'region_id' => 4],
            ['id' => 74, 'nama_provinsi' => 'SULAWESI TENGGARA', 'region_id' => 4],
            ['id' => 75, 'nama_provinsi' => 'GORONTALO', 'region_id' => 4],
            ['id' => 76, 'nama_provinsi' => 'SULAWESI BARAT', 'region_id' => 4],
            ['id' => 81, 'nama_provinsi' => 'MALUKU', 'region_id' => 5],
            ['id' => 82, 'nama_provinsi' => 'MALUKU UTARA', 'region_id' => 5],
            ['id' => 91, 'nama_provinsi' => 'PAPUA BARAT', 'region_id' => 5],
            ['id' => 94, 'nama_provinsi' => 'PAPUA', 'region_id' => 5],
        ];

        DB::table('provinces')->insert($provinces);
    }
}
