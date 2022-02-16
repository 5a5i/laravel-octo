<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            LanguageSeeder::class,
            DirectorSeeder::class,
            GenreSeeder::class,
            PerformerSeeder::class,
            TheaterSeeder::class,
            MovieSeeder::class,
            ShowsSeeder::class,
            RatingSeeder::class,
            MoviePerformersSeeder::class,
            MovieGenresSeeder::class,
            MovieDirectorsSeeder::class,
            MovieLanguagesSeeder::class,
        ]);
    }
}
