<?php

namespace Database\Seeders;

use App\Models\Vendor;
use App\Models\VendorImages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendors = Vendor::all();

        foreach ($vendors as $vendor) {
            for ($i = 1; $i <= 5; $i++) {
                VendorImages::create([
                    'image_path' => "image_{$vendor->id}_{$i}.jpg",
                    'vendor_id' => $vendor->id,
                ]);
            }
        }
    }
}
