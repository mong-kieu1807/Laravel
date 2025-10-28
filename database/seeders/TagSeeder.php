<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            'Action', 'Adventure', 'Sports', 'RPG', 'Strategy',
            'Puzzle', 'Racing', 'Simulation', 'Multiplayer', 'Indie',
        ];

        $now = now();
        $data = array_map(function ($name) use ($now) {
            return [
                'name' => $name,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }, $names);

        // Insert or ignore in case seeder runs multiple times
        foreach ($data as $row) {
            Tag::firstOrCreate(['name' => $row['name']], $row);
        }
    }
}
