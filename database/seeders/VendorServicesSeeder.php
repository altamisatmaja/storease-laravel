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
                VendorServices::create([
                    'service_name' => "Service {$vendor->id}",
                    'service_description' => "Service Description {$vendor->id}",
                    'thumbnail_service' => "thumbnail_service_{$vendor->id}.jpg",
                    'start_price_at' => rand(1000, 10000),
                    'location_available' => "Location Available {$vendor->id}",
                    'vendor_id' => $vendor->id,
                ]);
        }

    }
}
