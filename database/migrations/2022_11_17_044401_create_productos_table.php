<?php

use App\Models\Producto;
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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreProducto');
            $table->decimal('Precio');
            $table->enum('Estado',[Producto::BORRADOR,Producto::PUBLICADO])->default(Producto::BORRADOR); //1 borrador 2 publicado
            $table->string('Codigo');
            $table->string('Imagen');
            $table->string('Descripcion');

            $table->unsignedBigInteger('IdMarca');

            $table->foreign('IdMarca')->references('id')->on('marcas');
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
        Schema::dropIfExists('productos');
    }
};
