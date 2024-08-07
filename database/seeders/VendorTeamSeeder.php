<?php

namespace Database\Seeders;

use App\Models\Vendor;
use App\Models\VendorTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendors = Vendor::all();

        foreach ($vendors as $vendor) {
            for ($i = 1; $i <= 5; $i++) {
                VendorTeam::create([
                    'owner_vendor_name' => "Owner {$vendor->id} {$i}",
                    'about_the_team' => "About The Team {$i}",
                    'vendor_id' => $vendor->id,
                ]);
            }
        }
    }
}
