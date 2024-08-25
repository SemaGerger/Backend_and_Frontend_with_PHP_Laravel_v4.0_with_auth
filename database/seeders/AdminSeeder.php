<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Admin::where('email', 'sky.gerger1@gmail.com')->doesntExist()) {
            Admin::create([
                'name' => 'Admin369*',
                'email' => 'sky.gerger1@gmail.com',
                'password' => Hash::make('Sg369*/852147'), 
                'is_admin' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
