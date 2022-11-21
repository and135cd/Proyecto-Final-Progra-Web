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
            $table->string('name');
            $table->string('slug');
            $table->string('details');
            $table->decimal('price');
            $table->decimal('shipping_cost');
            $table->string('description');
            
            $table->unsignedBigInteger('sucursal_id');
            $table->unsignedBigInteger('brand_id');

            $table->foreign('brand_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('sucursal_id')->references('id')->on('sucursals')->onDelete('cascade');

            $table->string('image_path');
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
