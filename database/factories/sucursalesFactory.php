<?php

namespace Database\Factories;

use App\Models\sucursales;
use App\Models\terceros;
use App\Traits\GeoPoliticaColombiaTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class sucursalesFactory extends Factory
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
            'telefono' => fake()->phoneNumber(),
            'direccion' => fake()->streetAddress(),
            'departamento' => $ubicacion['departamento'],
            'ciudad' => $ubicacion['ciudad']
        ];
    }
}
