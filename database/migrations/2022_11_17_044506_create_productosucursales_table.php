<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productosucursales', function (Blueprint $table) {
            $table->id();
            $table->integer('Stock');

            $table->unsignedBigInteger('IdProducto');
            $table->unsignedBigInteger('IdSucursal');

            $table->foreign('IdProducto')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('IdSucursal')->references('id')->on('sucursales')->onDelete('cascade');

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
        Schema::dropIfExists('productosucursales');
    }
};
