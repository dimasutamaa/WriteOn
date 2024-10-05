<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'title' => 'Web Development',
            'slug' => 'web-development'
        ]);

        Category::factory()->create([
            'title' => 'Java',
            'slug' => 'java'
        ]);

        Category::factory()->create([
            'title' => 'Laravel',
            'slug' => 'laravel'
        ]);

        Category::factory()->create([
            'title' => 'Web Design',
            'slug' => 'web-design'
        ]);
        
        Category::factory()->create([
            'title' => 'PHP',
            'slug' => 'php'
        ]);
    }
}
