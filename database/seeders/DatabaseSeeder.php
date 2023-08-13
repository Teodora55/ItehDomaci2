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

         $f = new FilmsSeeder();
         $f->run();

         $r = new ReziserSeeder();
         $r->run();

    }
}
