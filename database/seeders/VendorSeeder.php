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
            for ($i = 1; $i <= 3; $i++) {
                Vendor::create([
                    'vendor_name' => "Vendor {$category->category_name} {$i}",
                    'provinsi_vendor' => "Provinsi {$i}",
                    'kabupaten_vendor' => "Kabupaten {$i}",
                    'kecamatan_vendor' => "Kecamatan {$i}",
                    'kelurahan_vendor' => "Kelurahan {$i}",
                    'detail_alamat_vendor' => "Detail Alamat Vendor {$i}",
                    'about_vendor' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra.  Donec vel egestas dolor, nec dignissim metus. Donec augue elit, rhoncus ac sodales id, porttitor vitae est. Donec laoreet rutrum libero sed pharetra. Duis a arcu convallis, gravida purus eget, mollis diam. {$i}",
                    'link_instagram_vendor' => "https://instagram.com/vendor_{$i}_{$category->id}",
                    'link_website_vendor' => "https://vendor{$i}_{$category->id}.com",
                    'link_facebook_vendor' => "https://facebook.com/vendor_{$i}_{$category->id}",
                    'location_by_gmaps' => "Location {$i}",
                    'thumbnail_vendor' => "thumbnail_vendor_{$i}_{$category->id}.jpg",
                    'vendor_category_services_id' => $category->id,
                    'slug' => "vendor-{$category->slug}-{$i}",
                ]);
            }
        }
    }
}
