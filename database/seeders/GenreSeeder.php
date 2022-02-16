<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            ['genre' => 'action'],
            ['genre' => 'adventure'],
            ['genre' => 'comedy'],
            ['genre' => 'crime and mystery'],
            ['genre' => 'fantasy'],
            ['genre' => 'historical'],
            ['genre' => 'horror'],
            ['genre' => 'romance'],
            ['genre' => 'satire'],
            ['genre' => 'science fiction'],
            ['genre' => 'speculative'],
            ['genre' => 'thriller'],
            ['genre' => 'western'],
            ['genre' => 'animation'],
            ['genre' => 'comedy'],
            ['genre' => 'drama'],
            ['genre' => 'historical'],
            ['genre' => 'horror'],
            ['genre' => 'science fiction'],
            ['genre' => 'western']
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
