<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
>>>>>>> 91941c7 (feat: convert to laravel 10)
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // User::factory(10)->create();

        // User::factory()->create([
=======
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
>>>>>>> 91941c7 (feat: convert to laravel 10)
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => 'Productivity'
        ]);

        Category::create([
            'name' => 'Relax'
        ]);

        Category::create([
            'name' => 'Family'
        ]);
    }
}
