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
        Schema::create('categoriamarcas', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('IdCategoria');
            $table->unsignedBigInteger('IdMarca');

            $table->foreign('IdCategoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('IdMarca')->references('id')->on('marcas')->onDelete('cascade');

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
        Schema::dropIfExists('categoriamarcas');
    }
};
