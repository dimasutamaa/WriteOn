<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Dimas',
            'email' => 'dimas@example.com',
        ]);

        User::factory()->create([
            'name' => 'John',
            'email' => 'john@example.com',
        ]);

        $this->call(PostSeeder::class);
        $this->call(CategorySeeder::class);
    }
}
