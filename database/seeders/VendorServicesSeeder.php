<?php

namespace Database\Seeders;

use App\Models\Vendor;
use App\Models\VendorServices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendors = Vendor::all();

        foreach ($vendors as $vendor) {
            for ($i = 1; $i <= 5; $i++) {
                VendorServices::create([
                    'service_name' => "Service {$vendor->id} {$i}",
                    'service_description' => "Service Description {$i}",
                    'thumbnail_service' => "thumbnail_service_{$i}.jpg",
                    'start_price_at' => rand(1000, 10000),
                    'location_available' => "Location Available {$i}",
                    'vendor_id' => $vendor->id,
                ]);
            }
        }

    }
}
