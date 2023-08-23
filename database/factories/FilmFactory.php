<?php

namespace Database\Factories;

use App\Models\Reziser;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->sentence,
            'opis' => $this->faker->paragraph,
            'zanr_filma' => $this->faker->word,
            'user_id' => User::find(random_int(1,User::count())),
        ];
    }
}
