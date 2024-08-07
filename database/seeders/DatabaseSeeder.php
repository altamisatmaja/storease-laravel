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
                'slug' => 'Venue',
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
            'operational_schedule_date' => 'Senin-Sabtu',
            'operational_schedule_hour' => '09.00 - 17.00',
            'location_storease' => 'Jember',
        ];

        DB::table('contact_us')->insert($contact_us);

        $general = [
            'title' => 'storease - Official Website',
            'icon' => 'icon.svg',
        ];

        DB::table('general')->insert($general);

        $hero = [
            [
                'title' => 'Who we are?',
                'image' => 'hero-welcome.png',
                'page' => 'welcome',
            ],
            [
                'title' => 'Tetap terhubung dengan kami!',
                'image' => 'hero-contact-us.png',
                'page' => 'contact-us',
            ],
            [
                'title' => 'Pilih partner kami!',
                'image' => 'hero-partner.png',
                'page' => 'partner',
            ],
        ];

        DB::table('hero')->insert($hero);

        $home_pages = [
            'hero_images' => 'hero-welcome-images.png',
            'about_section_description' => 'Who we are?',
            'our_vision' => 'Menjadi Perusahaan One Stop Wedding Service dan selalu menjadi market leader dengan tetap menjaga sustainabilitas perusahaan',
            'our_mission' => '1. Memberikan Pelayanan dengan Kualitas dan Hasil terbaik untuk kepuasan pelanggan<br>
2. Menjadikan Kepuasan Pelanggan sebagai satu-satunya tolak ukur dalam melayani pelanggan<br>
3. Mengembangkan Produk dan Jasa Layanan yang inovatif untuk meningkatkan kepuasan pelanggan<br>
4. Senantiasa meningkatkan kualitas sumber daya manusia guna menghasilkan produk dan pelayanan terbaik
',
        ];

        DB::table('home_pages')->insert($home_pages);

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
            [
                'thumbnail_portofolio' => 'thumbnail6.jpg',
                'hover_portofolio' => 'hover6.jpg',
                'link_social_media_portofolio' => 'https://example.com/social6',
            ],
            [
                'thumbnail_portofolio' => 'thumbnail7.jpg',
                'hover_portofolio' => 'hover7.jpg',
                'link_social_media_portofolio' => 'https://example.com/social7',
            ],
            [
                'thumbnail_portofolio' => 'thumbnail8.jpg',
                'hover_portofolio' => 'hover8.jpg',
                'link_social_media_portofolio' => 'https://example.com/social8',
            ],
            [
                'thumbnail_portofolio' => 'thumbnail9.jpg',
                'hover_portofolio' => 'hover9.jpg',
                'link_social_media_portofolio' => 'https://example.com/social9',
            ],
            [
                'thumbnail_portofolio' => 'thumbnail10.jpg',
                'hover_portofolio' => 'hover10.jpg',
                'link_social_media_portofolio' => 'https://example.com/social10',
            ],
        ]);

        DB::table('testimonial_home_pages')->insert([
            [
                'customer_name' => 'Andi Pratama',
                'customer_pictures' => 'andi_pratama.jpg',
                'description_testimonial' => 'Layanan yang sangat memuaskan dan cepat!',
                'rating' => 5,
            ],
            [
                'customer_name' => 'Siti Aminah',
                'customer_pictures' => 'siti_aminah.jpg',
                'description_testimonial' => 'Pelayanan yang ramah dan hasilnya memuaskan.',
                'rating' => 4,
            ],
            [
                'customer_name' => 'Budi Santoso',
                'customer_pictures' => 'budi_santoso.jpg',
                'description_testimonial' => 'Sangat puas dengan hasil kerja yang diberikan!',
                'rating' => 5,
            ],
            [
                'customer_name' => 'Dewi Lestari',
                'customer_pictures' => 'dewi_lestari.jpg',
                'description_testimonial' => 'Pelayanan yang profesional dan hasil yang bagus.',
                'rating' => 4,
            ],
            [
                'customer_name' => 'Rudi Hidayat',
                'customer_pictures' => 'rudi_hidayat.jpg',
                'description_testimonial' => 'Hasil yang sangat baik dan memuaskan!',
                'rating' => 5,
            ],
        ]);
    }
}
