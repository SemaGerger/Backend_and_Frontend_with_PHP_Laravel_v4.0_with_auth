<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Main;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mains = ['Sınavlar', 'Testler', 'Genel'];
    

        foreach ($mains as $main) {
            Main::create([
                'name' => $main,          
                'status' => 'active',     
                'category_id' => 1,       
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
