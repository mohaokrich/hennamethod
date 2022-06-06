<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $slug = Str::slug($title, '-');
    
        return [
            'title'=> $title,
            'title_slug'=> $slug,
            'body'=> $this->faker->text,
            'author'=> $this->faker->name,
            'post_creation'=> $this->faker->date,
            'photo'=> $this->faker->imageUrl(640, 480, 'animals', true),
            'excerpt'=> $this->faker->text,
        ];
    }
}
