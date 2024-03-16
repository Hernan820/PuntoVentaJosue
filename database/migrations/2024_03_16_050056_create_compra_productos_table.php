<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('productos'); 
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('users'); 
            $table->unsignedBigInteger('id_proveedor');
            $table->foreign('id_proveedor')->references('id')->on('proveedors'); 
            $table->unsignedBigInteger('id_estado');
            $table->foreign('id_estado')->references('id')->on('estados'); 
            $table->datetime('fecha_compra')->nullable(); 
            $table->integer('cantidad_producto')->nullable(); 
            $table->decimal('precio_compra', 10, 2);     
            $table->datetime('fecha_expiracion')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compra_productos');
    }
}
