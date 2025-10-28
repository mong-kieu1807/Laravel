<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed tags
        $this->call(TagSeeder::class);

        // Attach 1-3 random tags to each existing product
        $tagIds = Tag::pluck('id')->all();
        if (!empty($tagIds)) {
            Product::chunkById(100, function ($products) use ($tagIds) {
                foreach ($products as $product) {
                    $count = random_int(1, 3);
                    $attachIds = collect($tagIds)->shuffle()->take($count)->all();
                    $product->tags()->syncWithoutDetaching($attachIds);
                }
            });
        }
    }
}
