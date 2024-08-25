<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteSetting;
use App\Models\Feature;
use App\Models\Contact;


class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        Feature::create([
            'featured_title' => 'Kolay Kullanım',
            'featured_description' => 'Kullanıcı dostu arayüz ile kolay kullanım imkanı',
            'featured_image_table' => '1.png', 
        ]);
        Feature::create([
            'featured_title' => 'Geniş İçerik',
            'featured_description' => 'Farklı konularda zengin içerik ve soru havuzu.',
            'featured_image_table' => '2.png',
        ]);
        Feature::create([
            'featured_title' => 'Özgün Sorular',
            'featured_description' => 'Siz de bu sınav topluluğumuza dahil olabilirsiniz.',
            'featured_image_table' => '3.png',
        ]);
     
        Contact::create([
            'email' => 'sky.gerger1@gmail.com',
            'phone' => '+90 000 00 00',
            'address' => 'Üsküdar Mah. No: 11, İstanbul',
            'social_media_name' => 'Youtube',
            'social_media_url' => '#',
           
        ]);

        SiteSetting::create([
            'meta_keywords' => 'sınav, yapay zeka, eğitim',
            'meta_author' => 'Sınavım Var',
            'site_title' => 'Sınavım Var Sitesi',
            'favicon_path' => 'favicon.ico',
            'site_description' => 'Geniş sınav topluluğumuz ve yapay zeka destekli sınavlarımızla, sınav deneyiminizi bir üst seviyeye taşıyoruz.',
            'logo_image_table' => 'logo.jpg',
            'banner_image_table' => 'sinav_home_photo.jpg',
            'google_analytics_id' => 'UA-XXXXXXXXX-X',
            'maintenance_mode' => true,
         
            'site_text' => 'Sınavım Var Sitesi. Tüm hakları saklıdır.',
            'footer_image_table' => 'footer.jpg',
            'copyright_text' => '© 2024 Sınavım Var Sitesi',
         
        ]);
    }
}
