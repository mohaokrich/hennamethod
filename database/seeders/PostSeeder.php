<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $title = $this->faker->title;

        // foreach (range(1, 10) as $value) {
        //     DB::table('Posts')->insert([
        //         'title'=> $title,
        //         'title_slug'=> Str::slug($title),
        //         'body'=> $faker->body,
        //         'author'=> $faker->author,
        //         'post_creation'=> $faker->post_creation,
        //         'excerpt'=> $faker->excerpt,
        //     ]);
        // }

        Post::factory()
            ->count(50)
            ->create();
    }
}
