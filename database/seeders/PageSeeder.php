<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create([
            'title' => 'Tentang Flite Charter',
            'slug' => 'about',
            'content' => 'Flite Charter adalah penyedia layanan charter pesawat terpercaya dengan pengalaman bertahun-tahun dalam industri penerbangan.',
            'meta_description' => 'Pelajari lebih lanjut tentang Flite Charter, penyedia layanan charter pesawat terpercaya dengan standar keamanan tinggi dan layanan premium.',
            'meta_keywords' => 'flite charter, about, tentang, charter pesawat, aviation',
        ]);

        Page::create([
            'title' => 'Layanan Charter Pesawat',
            'slug' => 'services',
            'content' => 'Kami menyediakan berbagai layanan charter pesawat untuk memenuhi kebutuhan perjalanan bisnis dan pribadi Anda.',
            'meta_description' => 'Layanan charter pesawat premium dari Flite Charter untuk perjalanan bisnis dan pribadi dengan standar keamanan tinggi.',
            'meta_keywords' => 'charter pesawat, layanan charter, private jet, business travel',
        ]);

        Page::create([
            'title' => 'Armada Pesawat Kami',
            'slug' => 'fleet',
            'content' => 'Armada pesawat modern dengan teknologi terdepan dan fasilitas mewah untuk kenyamanan perjalanan Anda.',
            'meta_description' => 'Jelajahi armada pesawat modern Flite Charter dengan teknologi terdepan dan fasilitas mewah untuk perjalanan yang nyaman.',
            'meta_keywords' => 'armada pesawat, fleet, pesawat charter, aircraft',
        ]);

        Page::create([
            'title' => 'Flite Charter - Layanan Charter Pesawat Terpercaya',
            'slug' => 'homepage',
            'content' => 'Flite Charter menyediakan layanan charter pesawat pribadi dan komersial dengan standar keamanan tinggi dan layanan premium untuk perjalanan bisnis dan pribadi Anda.',
            'meta_description' => 'Flite Charter - Penyedia layanan charter pesawat terpercaya dengan standar keamanan tinggi, armada modern, dan layanan premium untuk perjalanan bisnis dan pribadi.',
            'meta_keywords' => 'charter pesawat, private jet, business travel, flite charter, pesawat pribadi, aviation indonesia',
            'og_image' => 'images/og-homepage.jpg',
        ]);

        Page::create([
            'title' => 'Charter Pesawat - Flite Charter',
            'slug' => 'charter',
            'content' => 'Layanan charter pesawat premium dengan berbagai pilihan armada untuk memenuhi kebutuhan perjalanan bisnis dan pribadi Anda.',
            'meta_description' => 'Charter pesawat premium dari Flite Charter dengan berbagai pilihan armada, layanan 24/7, dan standar keamanan internasional.',
            'meta_keywords' => 'charter pesawat, sewa pesawat, private jet charter, aircraft charter',
        ]);

        Page::create([
            'title' => 'Dapatkan Quote - Flite Charter',
            'slug' => 'quote',
            'content' => 'Dapatkan penawaran harga charter pesawat yang kompetitif dan transparan sesuai dengan kebutuhan perjalanan Anda.',
            'meta_description' => 'Dapatkan quote charter pesawat yang kompetitif dari Flite Charter. Harga transparan, tanpa biaya tersembunyi, konsultasi gratis.',
            'meta_keywords' => 'quote charter, harga charter pesawat, penawaran charter, konsultasi charter',
        ]);
    }
}
