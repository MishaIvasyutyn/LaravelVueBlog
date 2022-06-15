<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\State>
 */
class StateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $likes = $this->faker->numberBetween(1, 100);
        $views =$this->faker->numberBetween($likes, 200);
        return [
            'likes' => $likes,
            'views' => $views
        ];
    }
}
