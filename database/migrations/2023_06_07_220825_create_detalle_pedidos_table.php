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
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->string('prefijo');
            $table->integer('num_pedido');
            $table->string('perfil');
            $table->string('familia');
            $table->string('grupo');
            $table->string('subgrupo');
            $table->string('id_producto');
            $table->string('descripcion');
            $table->double('subtotal',255,2);
            $table->double('iva',255,2);
            $table->double('total',255,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedidos');
    }
};
