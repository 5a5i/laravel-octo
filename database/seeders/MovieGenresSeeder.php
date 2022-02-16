<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\MovieGenres;

class MovieGenresSeeder extends Seeder
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
            $genres = Genre::all()->random(3);
            foreach ($genres as $genre) {
                $movie_genres = ['movie_id' => $movie->id,'genre_id' => $genre->id];
                MovieGenres::create($movie_genres);
            }
        }

    }
}
