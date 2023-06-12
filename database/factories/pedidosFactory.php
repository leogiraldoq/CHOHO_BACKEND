<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Traits\GeoPoliticaColombiaTrait;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pedidos>
 */
class pedidosFactory extends Factory
{
    use GeoPoliticaColombiaTrait;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ubicacion = $this->randomSelectDepartament();
        return [
            'fecha_pedido' => fake()->date(),
            'prefijo' => "PE",
            'num_pedido' => fake()->numberBetween(1000,9999),
            'vendedor' => fake()->name(),
            'departamento' => Str::upper($ubicacion['departamento']),
            'ciudad' => Str::upper($ubicacion['ciudad'])
        ];
    }
}
