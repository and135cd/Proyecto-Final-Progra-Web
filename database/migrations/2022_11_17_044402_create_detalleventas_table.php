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
        Schema::create('detalleventas', function (Blueprint $table) {
            $table->id();
            

            $table->unsignedBigInteger('IdProducto');
            $table->unsignedBigInteger('IdVenta');

            $table->foreign('IdProducto')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('IdVenta')->references('id')->on('ventas')->onDelete('cascade');

            $table->integer('Cantidad');
            $table->decimal('Subtotal');
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
        Schema::dropIfExists('detalleventas');
    }
};
