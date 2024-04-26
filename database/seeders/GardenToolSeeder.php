<?php

namespace Database\Seeders;

use App\Models\GardenTool;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class GardenToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            GardenTool::create([
                'title' => $faker->word,
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 10, 100),
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'brand' => $faker->word,
            ]);
        }
    }
}
