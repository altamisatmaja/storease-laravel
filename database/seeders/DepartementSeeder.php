<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            ['nama_departemen' => 'Operations'],
            ['nama_departemen' => 'Finance'],
            ['nama_departemen' => 'Sales'],
            ['nama_departemen' => 'HR'],
            ['nama_departemen' => 'IT'],
        ];

        DB::table('departements')->insert($departments);
    }
}
