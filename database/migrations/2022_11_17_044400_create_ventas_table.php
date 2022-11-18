<?php

use App\Models\Venta;
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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->date('Fecha');
            $table->string('Direccion');
            $table->enum('Estado',[Venta::EN_ESPERA,Venta::ENVIADO,Venta::CANCELADO])->default(Venta::EN_ESPERA);
            $table->decimal('PrecioEnvio');
            $table->decimal('Total');


            $table->unsignedBigInteger('IdCliente');
            $table->unsignedBigInteger('IdSucursal');
            $table->unsignedBigInteger('IdDepartamento');

            $table->foreign('IdCliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('IdSucursal')->references('id')->on('sucursals')->onDelete('cascade');
            $table->foreign('IdDepartamento')->references('id')->on('departamentos')->onDelete('cascade');

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
        Schema::dropIfExists('ventas');
    }
};
