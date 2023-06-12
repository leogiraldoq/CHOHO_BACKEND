<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class pedidos extends Model
{
    use HasFactory;

    protected $table = "pedidos";
    protected $fillable=[
        'fecha_pedido',
        'prefijo',
        'num_pedido',
        'nit', 
        'razon_social',
        'vendedor',
        'departamento',
        'ciudad'
    ];


    public function detalle_pedidos(): HasMany{
        return $this->hasMany(detalle_pedidos::class,'num_pedido','num_pedido');
    }
}
