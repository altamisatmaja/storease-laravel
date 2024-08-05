<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [];
        for($i = 2; $i <= 10; $i++){
            $employees[] = [
                'nama_lengkap' => 'Employee ' . $i,
                'nik' => '12345678' . $i,
                'photo' => 'default.jpg',
                'nomor_hp' => '0812345678' . $i,
                'tanggal_lahir' => now()->subYears(rand(20, 40))->format('Y-m-d'),
                'jenis_kelamin' => rand(0, 1) == 1 ? 'Laki-laki' : 'Perempuan',
                'work_at' => now(),
                'office_id' => rand(1, 5),
                'employee_position_id' => rand(1, 5),
            ];
        }

        DB::table('employees')->insert($employees);

        $driver = [
            'nama_lengkap' => 'Driver',
                'nik' => '123456781',
                'photo' => 'default.jpg',
                'nomor_hp' => '0812345678',
                'tanggal_lahir' => now()->subYears(rand(20, 40))->format('Y-m-d'),
                'jenis_kelamin' => rand(0, 1) == 1 ? 'Laki-laki' : 'Perempuan',
                'work_at' => now(),
                'office_id' => rand(1, 5),
                'employee_position_id' => 5,
        ];

        DB::table('employees')->insert($driver);
    }
}
