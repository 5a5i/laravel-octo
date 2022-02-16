<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Director;
use App\Models\MovieDirectors;

class MovieDirectorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $movies = Movie::all();

        foreach ($movies as $movie) {
            $rendom_number = rand(1,3);
            $directors = Director::all()->random($rendom_number);
            foreach ($directors as $director) {
                $movie_directors = ['movie_id' => $movie->id,'director_id' => $director->id];
                MovieDirectors::create($movie_directors);
            }
        }

    }
}
