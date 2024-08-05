<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeePositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            ['jabatan' => 'Manager'],
            ['jabatan' => 'Supervisor'],
            ['jabatan' => 'Pool Manager'],
            ['jabatan' => 'Staff'],
            ['jabatan' => 'Driver']
        ];

        DB::table('employee_positions')->insert($positions);
    }
}
