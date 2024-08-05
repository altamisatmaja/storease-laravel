<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicles')->insert([
            [
                'nama' => 'Vehicle 1',
                'plat_nomor' => 'AB123CD',
                'nomor_identifikasi' => 'ID123456',
                'picture' => 'vehicle1.jpg',
                'tahun_kendaraan' => 2020,
                'kapasitas_muatan' => 1000,
                'status_kepemilikan' => 'Sewa',
                'merk_vehicle_id' => 1,
                'model_vehicle_id' => 1,
                'category_vehicle_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Vehicle 2',
                'plat_nomor' => 'EF456GH',
                'nomor_identifikasi' => 'ID654321',
                'picture' => 'vehicle2.jpg',
                'tahun_kendaraan' => 2019,
                'kapasitas_muatan' => 2000,
                'status_kepemilikan' => 'Milik Perusahaan',
                'merk_vehicle_id' => 2,
                'model_vehicle_id' => 2,
                'category_vehicle_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
