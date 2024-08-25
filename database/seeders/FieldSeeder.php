<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Field;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fields = [
            ['name' => 'Genel Yetenek', 'exam_id' => 1],
            ['name' => 'Genel Kültür', 'exam_id' => 1],
            ['name' => 'Alan Bilgisi', 'exam_id' => 2],
         
            ['name' => 'Başlangıç Seviyesi (Elementary)', 'exam_id' => 3],
            ['name' => 'Orta Seviye (Intermediate)', 'exam_id' => 3],
            ['name' => 'İleri Seviye (Advanced)', 'exam_id' => 3],

            ['name' => 'YDS Hazırlık', 'exam_id' => 4],
            ['name' => 'TYT Hazırlık', 'exam_id' => 4],
        ];

        foreach ($fields as $field) {

            Field::create([
                'name' => $field['name'],
                'status' => 'active',
                'exam_id' => $field['exam_id'] ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
