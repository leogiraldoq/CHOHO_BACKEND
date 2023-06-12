<?php

namespace App\Http\Controllers;

use App\Interfaces\PedidosInterface;
use App\Models\pedidos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{

    private $pedidosRepository;

    public function __construct(PedidosInterface $pedidosRepository)
    {
        $this->middleware('auth:api');

        $this->pedidosRepository = $pedidosRepository;
    }

    /**
     * Lista todos los pedidos que se encuentra en la base de datos
     * @name index
     * @params null
     * @return pedidos
     */
    public function index()
    {
        try{
            $pedidos = $this->pedidosRepository->bringAll();
            return response()->json($pedidos,200);
        }catch(\Exception $e){
            return response()->json($e->getMessage(),500);
        }
    }


    /**
     * @desc Lista todos los pedidos con detalles de pedido que se encuentra en la base de datos
     * @name indexWithDetalles
     * @params null
     * @return pedidos join detalle_pedido
     */
    public function indexWithDetalles()
    {
        try{
            $pedidosDetalles = $this->pedidosRepository->bringAllDetelles();
            return response()->json($pedidosDetalles,200);
        }catch(\Exception $e){
            return response()->json($e->getMessage(),500);
        }
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @desc Muestra el pedido con sus detalles por id
     * @name show
     * @param Request $request->id
     * @return pedidos
     * 
     */
    public function show(Request $request)
    {
        try{
            $validate = $request->validate([
                'id' => 'required|numeric'
            ]);
            return $this->pedidosRepository->bringPerId($request->input('id'));
        }catch(\Exception $e){
            return response()->json($e->getMessage(),500);    
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pedidos $pedidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pedidos $pedidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pedidos $pedidos)
    {
        //
    }
}
