<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Exam;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exams = [
            
            ['name' => 'KPSS B (Kamu Personeli Seçme Sınavı B)', 'main_id' => 1, 'description'=>'Kamu Personeli Seçme Sınavı'],
            ['name' => 'KPSS Alan', 'main_id' => 1, 'description'=>'Kamu Personeli Seçme Sınavı'],
            ['name' => 'İngilizce', 'main_id' => 2, 'description'=>'Kamu Personeli Seçme Sınavı'],
            ['name' => 'Üniversite Sınavı', 'main_id' => 1,'description'=>'Kamu Personeli Seçme Sınavı'],
            ['name' => 'Bilgi Yarışması', 'main_id' => 3, 'description'=>'Kamu Personeli Seçme Sınavı'],
        ];

        foreach ($exams as $exam) {
            Exam::create([
                'name' => $exam['name'],
          
                'status' => 'active', 
                'main_id' => $exam['main_id'] ?? null,  
                'description' => $exam['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
