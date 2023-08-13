<?php

namespace Database\Factories;

use App\Models\Film;
use App\Models\Glumac;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Uloga>
 */
class UlogaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->firstName,
            'glumac_id' => Glumac::find(random_int(1,Glumac::count())),
            'film_id' => Film::find(random_int(1,Film::count())),
        ];
    }
}
