<?php

namespace Database\Seeders;

use App\Models\Vendor;
use App\Models\VendorCategoryServices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = VendorCategoryServices::all();

        foreach ($categories as $category) {
            for ($i = 1; $i <= 5; $i++) {
                Vendor::create([
                    'vendor_name' => "Vendor {$category->category_name} {$i}",
                    'provinsi_vendor' => "Provinsi {$i}",
                    'kabupaten_vendor' => "Kabupaten {$i}",
                    'kecamatan_vendor' => "Kecamatan {$i}",
                    'kelurahan_vendor' => "Kelurahan {$i}",
                    'detail_alamat_vendor' => "Detail Alamat Vendor {$i}",
                    'about_vendor' => "About Vendor {$i}",
                    'link_instagram_vendor' => "https://instagram.com/vendor_{$i}",
                    'link_website_vendor' => "https://vendor{$i}.com",
                    'link_facebook_vendor' => "https://facebook.com/vendor_{$i}",
                    'location_by_gmaps' => "Location {$i}",
                    'thumbnail_vendor' => "thumbnail_vendor_{$i}.jpg",
                    'vendor_category_services_id' => $category->id,
                    'slug' => "vendor-{$category->slug}-{$i}",
                ]);
            }
        }
    }
}
