<?php

namespace Database\Seeders;

use App\Models\usuarios;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        usuarios::create([
            'usuario' => "apiQuery",
            'password' => bcrypt("l30n4rd0"),
            'rol_usuario' => "Api Consultor",
            'email' => fake()->email()
        ]);
    }
}
