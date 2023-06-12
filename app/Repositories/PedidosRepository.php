<?php

namespace App\Repositories;

use App\Interfaces\PedidosInterface;
use App\Models\pedidos;

class PedidosRepository implements PedidosInterface
{

    public function bringAll()
    {
        return pedidos::all()->toArray();        
    }

    public function bringAllDetelles()
    {
        return pedidos::with('detalle_pedidos')->get()->toArray();        
    }

    public function bringPerId($id){
        return pedidos::with('detalle_pedidos')->find($id);
    }
}