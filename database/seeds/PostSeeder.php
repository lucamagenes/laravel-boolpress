<?php

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) { 
            $post = new Post();
            $post->title = $faker->sentence(3);
            $post->slug = Str::slug($post->title, '-');
            $post->sub_title = $faker->sentence(5);
            $post->cover = $faker->imageUrl(1200, 480, 'Post', true, $post->title);
            $post->body = $faker->paragraphs(10, true);
            $post->save();
        }
    }
}
