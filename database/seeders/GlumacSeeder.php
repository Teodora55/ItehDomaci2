<?php

namespace Database\Seeders;

use App\Models\Glumac;
use App\Models\Reziser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GlumacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Glumac::factory(10)->create();
    }
}
