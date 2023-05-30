<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 10; $i++){
            Post::create([
                'id' => $i,
                'title' => $faker->sentence(),
                'sub_title' => $faker->sentence(),
                'description' => $faker->text(200),
                'author' => $faker->name(),
                'date' => $faker->dateTime(),
                'paragraph_content' => $faker->paragraph(20),
                'thumbnail_image' => $faker->imageUrl(1440, 1080, 'animals', true),
                'content_image' => $faker->imageUrl(1440, 1080, 'animals', true),
                'viewed' => $faker->numberBetween(0,1000),
            ]);
        }
    }
}
