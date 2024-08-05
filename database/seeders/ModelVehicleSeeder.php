<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $model = [
            [
                'nama_model' => 'Truk Tambang'
            ],
            [
                'nama_model' => 'Service Trucks'
            ],
            [
                'nama_model' => 'Excavator'
            ],
            [
                'nama_model' => 'Bulldozer'
            ],
            [
                'nama_model' => 'Personnel Carriers'
            ],
        ];

        DB::table('model_vehicles')->insert($model);
    }
}
