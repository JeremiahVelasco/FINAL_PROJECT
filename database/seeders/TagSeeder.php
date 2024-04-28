<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'name' => 'Fps',
            'category_id' => 1
        ]);

        Tag::create([
            'name' => 'Puzzles',
            'category_id' => 1
        ]);

        Tag::create([
            'name' => 'RPG',
            'category_id' => 1
        ]);

        Tag::create([
            'name' => 'Indie',
            'category_id' => 1
        ]);

        Tag::create([
            'name' => 'Strategy',
            'category_id' => 1
        ]);

        Tag::create([
            'name' => 'Stealth',
            'category_id' => 1
        ]);

        Tag::create([
            'name' => 'Horror',
            'category_id' => 1
        ]);

        Tag::create([
            'name' => 'Arcade',
            'category_id' => 1
        ]);

        Tag::create([
            'name' => 'Fighting',
            'category_id' => 1
        ]);

        Tag::create([
            'name' => 'Adventure',
            'category_id' => 1
        ]);

        Tag::create([
            'name' => 'Board',
            'category_id' => 1
        ]);

        Tag::create([
            'name' => 'Sports',
            'category_id' => 1
        ]);

        Tag::create([
            'name' => 'Tps',
            'category_id' => 1
        ]);

        Tag::create([
            'name' => 'Rougelike',
            'category_id' => 1
        ]);

        Tag::create([
            'name' => 'Philosophical',
            'category_id' => 1
        ]);

        Tag::create([
            'name' => 'Sandbox',
            'category_id' => 1
        ]);

        Tag::create([
            'name' => 'Bullet hell',
            'category_id' => 1
        ]);
    }
}
