<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Performer;
use App\Models\MoviePerformers;

class MoviePerformersSeeder extends Seeder
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
            $rendom_number = rand(2,6);
            $performers = Performer::all()->random($rendom_number);
            foreach ($performers as $performer) {
                $movie_performers = ['movie_id' => $movie->id,'performer_id' => $performer->id];
                MoviePerformers::create($movie_performers);
            }
        }

    }
}
