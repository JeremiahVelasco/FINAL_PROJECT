<?php

namespace Database\Seeders;

use App\Models\Os;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Os::create([
            'name' => 'Windows'
        ]);

        Os::create([
            'name' => 'macOS'
        ]);

        Os::create([
            'name' => 'Linux'
        ]);

        Os::create([
            'name' => 'SteamOS'
        ]);
    }
}
