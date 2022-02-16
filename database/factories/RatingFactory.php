<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Rating;
use App\Models\Movie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $movie = Movie::inRandomOrder()->first();
        return [
            'movie_id' => $movie->id,
            'rating' => $this->faker->numberBetween(1, 10),
            'username' => $this->faker->name,
            'description' => $this->faker->text(),
        ];
    }
}
