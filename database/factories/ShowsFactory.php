<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movie;
use App\Models\Theater;
use App\Models\Shows;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shows>
 */
class ShowsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shows::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $timeslots = ['00:00:00','12:00:00','15:00:00','18:00:00','21:00:00'];
        $movie = Movie::inRandomOrder()->first();
        $theater = Theater::inRandomOrder()->first();
        $randomtime = $this->faker->randomElement($timeslots);
        $randomdate = $this->faker->dateTimeBetween('now','+90 days');
        $randomdatetime = $randomdate->format('Y-m-d').' '.$randomtime;
        $start = Carbon::createFromFormat('Y-m-d H:i:s', $randomdatetime);
        $startparse = Carbon::parse($start);
        $end = $startparse->addMinutes($movie->length);

        return [
            'movie_id' => $movie->id,
            'theater_id' => $theater->id,
            'theater_room_no' => $this->faker->numberBetween(1, 20),
            'start_time' => $start,
            'end_time' => $end,
        ];
    }
}
