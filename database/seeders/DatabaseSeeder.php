<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

        $this->call(RegionSeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(UserSeeder::class);

        $this->call(ApprovalLevelSeeder::class);
        $this->call(CategoryVehicleSeeder::class);
        $this->call(DepartementSeeder::class);

        $this->call(EmployeePositionSeeder::class);
        $this->call(MerkVehicleSeeder::class);
        $this->call(ModelVehicleSeeder::class);

        $this->call(OfficeSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(ApproverSeeder::class);

        $this->call(MiningStateSeeder::class);
        $this->call(VehicleSeeder::class);
    }
}
