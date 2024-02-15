<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $estado = ['Activo', 'Roto', 'Desaparecido'];
        return [
            'codigo' => 'cod' . $this->faker->unique()->randomNumber(5, true),
            'modelo' => 'modelo ' . $this->faker->text($maxNBChars = 10),
            'fabricante' => 'fabricante ' . $this->faker->text($maxNBChars = 10),
            'descripcion' => $this->faker->sentence(),
            'stock' => rand(1, 99),
            'estado' => $estado[rand(0, 2)],
            'localizacion_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
