<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Language;
use App\Models\MovieLanguages;

class MovieLanguagesSeeder extends Seeder
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
            $languages = Language::all()->random(3);
            foreach ($languages as $language) {
                $movie_languages = ['movie_id' => $movie->id,'language_id' => $language->id];
                MovieLanguages::create($movie_languages);
            }
        }

    }
}
