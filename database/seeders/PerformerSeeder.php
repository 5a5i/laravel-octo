<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Performer;

class PerformerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $performers = [
            ['name' => 'Malcolm McDowell'],
            ['name' => 'Steve Martin'],
            ['name' => 'Barbara Stanwyck'],
            ['name' => 'Ben Kingsley'],
            ['name' => 'Judy Holliday'],
            ['name' => 'Angela Bassett'],
            ['name' => 'Peter Lorre'],
            ['name' => 'Joan Crawford'],
            ['name' => 'Clint Eastwood'],
            ['name' => 'Jane Fonda'],
            ['name' => 'Jeff Bridges'],
            ['name' => 'Gong Li'],
            ['name' => 'Christopher Walken'],
            ['name' => 'John Wayne'],
            ['name' => 'Robert Walker'],
            ['name' => 'Jessica Lange'],
            ['name' => 'Anjelica Huston'],
            ['name' => 'Hilary Swank'],
            ['name' => 'George C. Scott'],
            ['name' => 'Kate Winslet'],
            ['name' => 'Jeanne Moreau'],
            ['name' => 'Johnny Depp'],
            ['name' => 'Toshiro Mifune'],
            ['name' => 'Morgan Freeman'],
            ['name' => 'Burt Lancaster'],
            ['name' => 'Julie Christie'],
            ['name' => 'Madeline Kahn'],
            ['name' => 'John Travolta'],
            ['name' => 'Judy Garland'],
            ['name' => 'Meryl Streep'],
            ['name' => 'Anthony Hopkins'],
            ['name' => 'Gloria Swanson'],
            ['name' => 'Cary Grant'],
            ['name' => 'Spencer Tracy'],
            ['name' => 'Holly Hunter'],
            ['name' => 'Jack Lemmon'],
            ['name' => 'Paul Newman'],
            ['name' => 'Gena Rowlands'],
            ['name' => 'Gary Oldman'],
            ['name' => 'Ralph Fiennes'],
            ['name' => 'Diane Keaton'],
            ['name' => 'Catherine Deneuve'],
            ['name' => 'Sigourney Weaver'],
            ['name' => 'Max Von Sydow'],
            ['name' => 'Jodie Foster'],
            ['name' => 'Sidney Poitier'],
            ['name' => 'Katharine Hepburn'],
            ['name' => 'Daniel Day-Lewis'],
            ['name' => 'Emma Thompson'],
            ['name' => 'Henry Fonda'],
            ['name' => 'Humphrey Bogart'],
            ['name' => 'Liv Ullmann'],
            ['name' => 'Bill Murray'],
            ['name' => 'Jack Nicholson'],
            ['name' => 'Tom Hanks'],
            ['name' => 'Reese Witherspoon'],
            ['name' => 'Charlie Chaplin'],
            ['name' => 'James Dean'],
            ['name' => 'Robert De Niro'],
            ['name' => 'Samuel L. Jackson'],
            ['name' => 'Nicole Kidman'],
            ['name' => 'Laurence Olivier'],
            ['name' => 'Carole Lombard'],
            ['name' => 'Gene Hackman'],
            ['name' => 'Faye Dunaway'],
            ['name' => 'Philip Seymour Hoffman'],
            ['name' => 'Buster Keaton'],
            ['name' => 'Dustin Hoffman'],
            ['name' => 'Audrey Hepburn'],
            ['name' => 'Jamie Foxx'],
            ['name' => 'James Stewart'],
            ['name' => 'Peter Sellers'],
            ['name' => 'Rosalind Russell'],
            ['name' => 'Marlon Brando'],
            ['name' => 'Maria Falconetti'],
            ['name' => 'Greta Garbo'],
            ['name' => 'Humphrey Bogart'],
            ['name' => 'Russell Crowe'],
            ['name' => 'Johnny Depp'],
            ['name' => 'Giulietta Masina'],
            ['name' => 'Al Pacino'],
            ['name' => 'Paul Newman'],
            ['name' => 'Emily Watson'],
            ['name' => 'Denzel Washington'],
            ['name' => 'Cary Grant'],
            ['name' => 'Tom Hanks'],
            ['name' => 'Robert Duvall'],
            ['name' => 'Katharine Hepburn'],
            ['name' => 'Jack Nicholson'],
            ['name' => 'Daniel Day-Lewis'],
            ['name' => 'Robert De Niro'],
            ['name' => 'Gene Wilder'],
            ['name' => 'James Stewart'],
            ['name' => 'Dustin Hoffman'],
            ['name' => 'James Cagney'],
            ['name' => 'Bette Davis'],
            ['name' => 'Al Pacino'],
            ['name' => 'Meryl Streep'],
            ['name' => 'Marlon Brando'],
            ['name' => 'Peter O`Toole']
        ];

        foreach ($performers as $performer) {
            Performer::create($performer);
        }
    }
}
