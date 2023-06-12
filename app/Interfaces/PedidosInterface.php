<?php 

namespace App\Interfaces;


interface PedidosInterface
{
    public function bringAll();
    public function bringAllDetelles();
    public function bringPerId($id);
}