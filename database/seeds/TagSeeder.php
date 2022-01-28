<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['fullstack dev', 'backend dev', 'Laravel dev', 'Vue dev'];


        foreach ($tags as $tag) {
            $_tag = new Tag();
            $_tag->name = $tag;
            $_tag->slug = Str::slug($_tag->name);
            $_tag->save();
        }
    }
}
