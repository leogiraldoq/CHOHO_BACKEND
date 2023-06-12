<?php

namespace Database\Seeders;

use App\Models\detalle_pedidos;
use App\Models\pedidos;
use App\Models\sucursales;
use App\Models\terceros;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidosDetallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $terceros = terceros::all()->map(function(terceros $tercero){
            pedidos::factory()->count(5)->create([
                'nit'=>$tercero['nit'],
                'razon_social'=>$tercero['razon_social']
            ])->map(function(pedidos $pedido){
                detalle_pedidos::factory()->count(3)->create([
                    'num_pedido' => $pedido['num_pedido']
                ]);
            });
        });
    }
}
