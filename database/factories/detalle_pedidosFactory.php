<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\detalle_pedidos>
 */
class detalle_pedidosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $grupo = fake()->numberBetween(0,99)."-".fake()->numberBetween(0,99);
        $total = fake()->randomFloat(2,1000,99999999999999);
        return [
            'prefijo' => 'PE',
            'perfil' => fake()->numberBetween(100,999),
            'familia' => fake()->numberBetween(0,99),
            'grupo' => $grupo,
            'subgrupo' => $grupo."-".fake()->numberBetween(0,9),
            'id_producto' => fake()->numberBetween(4000000000000,5000000000000),
            'descripcion' => fake()->realText(50),
            'subtotal' => $total-($total * 0.19),
            'iva' => $total * 0.19,
            'total' => $total
        ];
    }
}
