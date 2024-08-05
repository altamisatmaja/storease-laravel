<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = [
            'id' => 1,
            'username' => 'admin',
            'email'=> 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'photo' => 'default.jpg',
            'role' => 'Admin'
        ];

        DB::table('users')->insert($role_admin);

        $role_approvers = [];
        for($i = 2; $i <= 10; $i++){
            $role_approvers[] = [
                'id' => $i,
                'username' => 'approver'.$i,
                'email' => 'approver'.$i.'@gmail.com',
                'password' => Hash::make('approver'),
                'photo' => 'default.jpg',
                'role' => 'Approver'
            ];
        }

        DB::table('users')->insert($role_approvers);
    }
}
