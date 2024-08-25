<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'Sınavım Var', 'Sınav', 'Matematik', 'KPSS', 'KPSS A', 'Dil Bilgisi', 'Test', 
            'İngilizce', 'Devlet memuru', 'Kamu Personel Seçme Sınavı'
       
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag,
                'status' => 'active',
            ]);
        }
    }
}
