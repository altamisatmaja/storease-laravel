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

        $vendor_category_services = [
            [
                'category_name' => 'Fotografer & Videografer',
                'slug' => 'fotografer-videografer',
            ],
            [
                'category_name' => 'Catering',
                'slug' => 'catering',
            ],
            [
                'category_name' => 'Venue',
                'slug' => 'venue',
            ],
            [
                'category_name' => 'Make Up',
                'slug' => 'make-up',
            ],
            [
                'category_name' => 'Dress',
                'slug' => 'dress',
            ],
            [
                'category_name' => 'Souvenir',
                'slug' => 'souvenir',
            ],
            [
                'category_name' => 'Decoration',
                'slug' => 'decoration',
            ],
            [
                'category_name' => 'Undangan',
                'slug' => 'undangan',
            ],
        ];

        DB::table('vendor_category_services')->insert($vendor_category_services);

        $contact_us = [
            'detail_address_storease' => 'DcHub, Gedung Fakultas Ilmu Komputer, Universitas Jember',
            'whatsapp_number_storease' => '085121004933',
            'email_storease' => 'storease12@gmail.com',
            'operational_schedule_date' => 'Senin - Sabtu',
            'operational_schedule_hour' => '09.00 - 17.00',
            'location_storease' => 'Jember',
        ];

        DB::table('contact_us')->insert($contact_us);

        $hero = [
            [
                'title' => 'Who we are?',
                'image' => 'hero-welcome.jpg',
                'page' => 'welcome',
            ],
            [
                'title' => 'Tetap terhubung dengan kami!',
                'image' => 'hero-contact-us.jpg',
                'page' => 'contact-us',
            ],
            [
                'title' => 'Pilih partner kami!',
                'image' => 'hero-partner.jpg',
                'page' => 'partner',
            ],
        ];

        DB::table('hero')->insert($hero);

        $about_pages = [
            'about_images' => 'hero-welcome-images.jpg',
            'about_section_description' => 'adalah sanggar Tata Rias dan Tata Busana Tradisional yang berdiri sejak tahun 1978 pada awalnya merupakan salon kecantikan wajah dan rambut, dan kini berkembang menjadi Sanggar Tata Rias, Sanggar Tata Busana, Photography, Upacara Adat dan lain-lain, sesuai visi kami menjadi perusahaan One Stop Wedding Service.
Inovasi, Kreativitas, serta Profesionalisme merupakan salah satu kiat kami dalam menarik pelanggan, sehingga konsumen yang telah dilayani mencapai ribuan pasangan, dengan rata-rata penanganan sekitar 50-100 pasangan perbulan, dengan harga penawaran paket yang beragam, karena paket yang ditawarkan kepada konsumen bersifat customisasi (disesuaikan).',
            'our_vision' => 'Menjadi Perusahaan One Stop Wedding Service dan selalu menjadi market leader dengan tetap menjaga sustainabilitas perusahaan',
            'our_mission' => '1. Memberikan Pelayanan dengan Kualitas dan Hasil terbaik untuk kepuasan pelanggan<br>
2. Menjadikan Kepuasan Pelanggan sebagai satu-satunya tolak ukur dalam melayani pelanggan<br>
3. Mengembangkan Produk dan Jasa Layanan yang inovatif untuk meningkatkan kepuasan pelanggan<br>
4. Senantiasa meningkatkan kualitas sumber daya manusia guna menghasilkan produk dan pelayanan terbaik</p>
',
        ];

        DB::table('about_pages')->insert($about_pages);

        DB::table('portofolio_home_pages')->insert([
            [
                'thumbnail_portofolio' => 'thumbnail1.jpg',
                'hover_portofolio' => 'hover1.jpg',
                'link_social_media_portofolio' => 'https://example.com/social1',
            ],
            [
                'thumbnail_portofolio' => 'thumbnail2.jpg',
                'hover_portofolio' => 'hover2.jpg',
                'link_social_media_portofolio' => 'https://example.com/social2',
            ],
            [
                'thumbnail_portofolio' => 'thumbnail3.jpg',
                'hover_portofolio' => 'hover3.jpg',
                'link_social_media_portofolio' => 'https://example.com/social3',
            ],
            [
                'thumbnail_portofolio' => 'thumbnail4.jpg',
                'hover_portofolio' => 'hover4.jpg',
                'link_social_media_portofolio' => 'https://example.com/social4',
            ],
            [
                'thumbnail_portofolio' => 'thumbnail5.jpg',
                'hover_portofolio' => 'hover5.jpg',
                'link_social_media_portofolio' => 'https://example.com/social5',
            ],
        ]);

        DB::table('testimonial_home_pages')->insert([
            [
                'customer_name' => 'Andi Pratama',
                'customer_pictures' => 'download(1).jpeg',
                'description_testimonial' => 'Layanan yang sangat memuaskan dan cepat!',
                'rating' => 5,
            ],
            [
                'customer_name' => 'Siti Aminah',
                'customer_pictures' => 'download(2).jpeg',
                'description_testimonial' => 'Pelayanan yang ramah dan hasilnya memuaskan.',
                'rating' => 4,
            ],
            [
                'customer_name' => 'Budi Santoso',
                'customer_pictures' => 'download(3).jpeg',
                'description_testimonial' => 'Sangat puas dengan hasil kerja yang diberikan!',
                'rating' => 5,
            ],
            [
                'customer_name' => 'Dewi Lestari',
                'customer_pictures' => 'download(4).jpeg',
                'description_testimonial' => 'Pelayanan yang profesional dan hasil yang bagus.',
                'rating' => 4,
            ],
            [
                'customer_name' => 'Rudi Hidayat',
                'customer_pictures' => 'download(5).jpeg',
                'description_testimonial' => 'Hasil yang sangat baik dan memuaskan!',
                'rating' => 5,
            ],
        ]);

        $our_services = [
            [
                'vendor_name' => 'Fotografer & Videografer',
                'vendor_image' => 'services1.jpg',
            ],
            [
                'vendor_name' => 'Catering',
                'vendor_image' => 'services2.jpg',
            ],
            [
                'vendor_name' => 'Venue',
                'vendor_image' => 'services3.jpg',
            ],
            [
                'vendor_name' => 'Make Up',
                'vendor_image' => 'services4.jpg',
            ],
            [
                'vendor_name' => 'Make Up',
                'vendor_image' => 'services5.jpg',
            ],
        ];

        DB::table('our_services')->insert($our_services);

        $this->call([
            VendorSeeder::class,
            VendorImagesSeeder::class,
            VendorServicesSeeder::class,
            VendorTeamSeeder::class,
        ]);

    }
}
