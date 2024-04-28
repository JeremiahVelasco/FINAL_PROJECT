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
        Category::create([
            'name' => 'Video Games'
        ]);

        Category::create([
            'name' => 'Consoles'
        ]);

        Category::create([
            'name' => 'Gaming Cards'
        ]);

        Category::create([
            'name' => 'Merchandise'
        ]);
    }
}
