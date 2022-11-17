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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('Nombres');
            $table->string('Apellidos');
            $table->string('Telefono');
            $table->string('Direccion');
            $table->string('Dpi');
            $table->unsignedBigInteger('IdTipoUsuario');
            $table->unsignedBigInteger('IdSucursal');

            $table->foreign('IdTipoUsuario')->references('id')->on('tipousuarios');
            $table->foreign('IdSucursal')->references('id')->on('sucursales');
            
            $table->string('Usuario');
            $table->string('Contraseña');
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
        Schema::dropIfExists('empleados');
    }
};
