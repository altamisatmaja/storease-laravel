<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory(10)->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = [
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ];

        DB::table('users')->insert($user);

        $general = [
            'title' => 'storeease',
            'icon' => 'icon.svg'
        ];

        DB::table('general')->insert($general);

        $hero = [
            [
                'title' => 'Who We Are',
                'image' => 'hero.img',
                'page' => 'Home'
            ],
            [
                'title' => 'Tetap Terhubung Dengan Kami',
                'image' => 'contactus.img',
                'page' => 'Contact Us'
            ],
        ];

        DB::table('hero')->insert($hero);
    }
}
