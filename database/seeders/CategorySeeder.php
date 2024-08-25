<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([//Mass Assigment
            'name' => 'Exam',
            'status' => 'active', 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
