<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class detalle_pedidos extends Model
{
    use HasFactory;
    
    protected $table = "detalle_pedidos";
    protected $fillable = [
        'prefijo',
        'num_pedido',
        'perfil',
        'familia',
        'grupo',
        'subgrupo',
        'id_producto',
        'descripcion',
        'subtotal',
        'iva',
        'total'
    ];

    public function pedidos(): BelongsTo{
        return $this->belongsTo(pedidos::class,'num_pedido','num_pedido');
    }
}
