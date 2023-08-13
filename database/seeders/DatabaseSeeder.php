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
        \App\Models\Glumac::truncate();
        \App\Models\Film::truncate();
        \App\Models\Uloga::truncate();

         \App\Models\User::factory(5)->create();

         $f = new FilmsSeeder();
         $f->run();

         $g = new GlumacSeeder();
         $g->run();

         $u = new UlogaSeeder();
         $u->run();

    }
}
