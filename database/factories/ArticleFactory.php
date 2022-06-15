<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence(6, true);
        $slug=Str::slug($title);
        return [
            'title' => $title,
            'body' => $this->faker->paragraph(100, true),
            'slug' => $slug,
            'image' => 'https://heroichollywood.com/wp-content/uploads/2019/09/Keanu-Reeves-The-Matrix-4-Neo-1280x720.png',
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'published_at' => Carbon::now(),
        ];
    }
}
