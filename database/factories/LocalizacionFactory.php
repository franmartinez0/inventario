<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Localizacion>
 */
class LocalizacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ciudad' => $this->faker->city(),
            'nombre_edificio' => 'Edificio ' . $this->faker->text($maxNBChars = 10),
            'direccion_edificio' => $this->faker->address(),
            'numero de sala' => $this->faker->numberBetween(1, 25)
        ];
    }
}
