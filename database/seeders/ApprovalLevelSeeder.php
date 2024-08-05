<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApprovalLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $approval_levels = [
            ['nama' => 'Level 1', 'level' => 1],
            ['nama' => 'Level 2', 'level' => 2],
            ['nama' => 'Level 3', 'level' => 3],
            ['nama' => 'Level 4', 'level' => 4],
            ['nama' => 'Level 5', 'level' => 5],
        ];

        DB::table('approval_levels')->insert($approval_levels);
    }
}
