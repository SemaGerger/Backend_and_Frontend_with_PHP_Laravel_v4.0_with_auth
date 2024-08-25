<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ad;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ad::create([
            'title' => 'Kolay Kullanım',
            'content' => 'Kullanıcı dostu arayüz ile kolay kullanım imkanı',
            'ad_image_table' => null,

            'link' => '#',
            'status' => 'active',
            'expires_at' => now()->addDays(30),
            'priority' => 1,
            'views' => 0,
            'clicks' => 0,
        ]);

        Ad::create([
            'title' => 'Özel İndirim!',
            'content' => 'Sınırlı süre için özel indirim fırsatları!',
            'ad_image_table' => null,
            'link' => 'https://www.sinavimvar.com/indirim',
            'status' => 'passive',
            'expires_at' => now()->addDays(15),
            'priority' => 2,
            'views' => 0,
            'clicks' => 0,
        ]);

    }
}
