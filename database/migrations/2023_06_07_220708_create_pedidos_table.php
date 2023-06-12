<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->date('fecha_pedido');
            $table->string('prefijo');
            $table->integer('num_pedido');
            $table->string('nit'); 
            $table->string('razon_social');
            $table->string('vendedor');
            $table->string('departamento');
            $table->string('ciudad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
