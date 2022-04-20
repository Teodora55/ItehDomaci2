<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::truncate();
        \App\Models\Reziser::truncate();
        \App\Models\Film::truncate();

         \App\Models\User::factory(5)->create();

         $reziser1 = \App\Models\Reziser::create([
            'ime'=>"Steven",
            'prezime'=>'Spielberg',
        ]);

        $reziser2 = \App\Models\Reziser::create([
            'ime'=>"Quentin",
            'prezime'=>'Tarantino',
        ]);

        $reziser3 = \App\Models\Reziser::create([
            'ime'=>"Francis",
            'prezime'=>'Coppola',
        ]);

         $film1 = \App\Models\Film::create([
            'naziv'=>"Jaws",
            'opis'=>'In the film, a man-eating great white shark attacks beachgoers at a summer resort town, prompting police chief Martin Brody to hunt it with the help of a marine biologist and a professional shark hunter.',
            'zanr'=>'horor',
            'reziser_id'=>1,
            'user_id'=>2
        ]);


        $film2 = \App\Models\Film::create([
            'naziv'=>"Pulp Fiction",
            'opis'=>'Pulp Fictions narrative is told out of chronological order, and follows three main interrelated stories that each have a different protagonist: Vincent Vega, a hitman; Butch Coolidge, a prizefighter; and Jules Winnfield, Vincents business partner.',
            'zanr'=>'black comedy',
            'reziser_id'=>2,
            'user_id'=>3
        ]);

        $film3 = \App\Models\Film::create([
            'naziv'=>"The Godfather",
            'opis'=>'The story, spanning from 1945 to 1955, chronicles the Corleone family under patriarch Vito Corleone, focusing on the transformation of his youngest son, Michael Corleone, from reluctant family outsider to ruthless mafia boss.',
            'zanr'=>'crime',
            'reziser_id'=>3,
            'user_id'=>5
        ]);

    }
}
