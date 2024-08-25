<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Lesson;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lessons = [
            ['name' => 'Türkçe', 'field_id' => 1],
            ['name' => 'Matematik', 'field_id' => 1],
           

            ['name' => 'Tarih', 'field_id' => 2],
            ['name' => 'Coğrafya', 'field_id' => 2],
            ['name' => 'Vatandaşlık', 'field_id' => 2],

            ['name' => 'Ögretmenlik', 'field_id' => 3],
            ['name' => 'Sosyal Bilgiler', 'field_id' => 3],

            ['name' => 'A1', 'field_id' => 4],
            ['name' => 'A2', 'field_id' => 4],
            ['name' => 'B1', 'field_id' => 5],
            ['name' => 'B2', 'field_id' => 5],
            ['name' => 'C1', 'field_id' => 6],
            ['name' => 'C2', 'field_id' => 6],

           
        ];

        foreach ($lessons as $lesson) {
            
            Lesson::create([
                'name' => $lesson['name'],
                'status' => 'active',
                'field_id' => $lesson['field_id'] ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
