<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            CategorySeeder::class,
            MainSeeder::class, 
            ExamSeeder::class, 
            FieldSeeder::class,
            LessonSeeder::class,
            SubjectSeeder::class, 
            TagSeeder::class,
            //ImgSeeder::class,
            ArticleSeeder::class,
            QuestionSeeder::class,
            AdSeeder::class,
            SiteSettingSeeder::class,
        ]);
    }
}
