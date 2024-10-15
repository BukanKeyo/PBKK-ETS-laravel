<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnimeReview>
 */
class AnimeReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_id' => $this->faker->numberBetween(1, 5),
            'genre_id' => $this->faker->numberBetween(1, 13),
            'review' => $this->faker->sentence(10),
            'rating' => $this->faker->randomFloat(1, 1, 10),
            //'image' => 'prescriptions/' . $this->faker->image('public/storage/prescriptions', 640, 480, null, false),
        ];
    }
}
