<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_vehicles = [
            ['id' => 1,'nama_kategori_kendaraan'=> 'Angkutan Barang'],
            ['id' => 2,'nama_kategori_kendaraan'=> 'Angkutan Personel'],
        ];

        DB::table('category_vehicles')->insert($category_vehicles);
    }
}
