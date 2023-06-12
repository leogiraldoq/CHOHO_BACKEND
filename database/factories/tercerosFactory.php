<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class tercerosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nit' => fake()->unique()->numberBetween(100000000,999999999),
            'razon_social' => fake()->unique()->firstName(),
            'tipo' => fake()->randomElement(['CLIENTE','PROVEEDOR']),
            'activo' => fake()->randomElement(['S','N'])
        ];
    }
}
