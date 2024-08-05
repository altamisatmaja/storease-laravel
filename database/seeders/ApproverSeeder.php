<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApproverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $approvers = [];
        for($i = 2; $i <= 9; $i++){
            $approvers[] = [
                'departement_id' => rand(1, 5),
                'employee_id' => $i,
                'user_id' => $i
            ];
        }

        DB::table('approvers')->insert($approvers);
    }
}
