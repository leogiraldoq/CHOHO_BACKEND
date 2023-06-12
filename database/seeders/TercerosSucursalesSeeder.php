<?php

namespace Database\Seeders;

use App\Models\sucursales;
use App\Models\terceros;
use Illuminate\Database\Seeder;

class TercerosSucursalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        terceros::factory()->count(20)->create()->map(function ($tercero){
           sucursales::factory()->count(random_int(3,6))->create([
            'nit'=>$tercero['nit']
           ]); 
        });
    }
}
