<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movie;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $mpaa_ratings = [
            'G',
            'PG',
            'PG-13',
            'R',
            'NC-17'
        ];

        return [
            'title' => $this->faker->name,
            'description' => $this->faker->text(),
            'length' => $this->faker->numberBetween(50, 120),
            'release' => $this->faker->dateTimeBetween('-2 months'),
            'mpaa_rating' => $this->faker->randomElement($mpaa_ratings)
        ];
    }
}
