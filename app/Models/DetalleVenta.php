<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;
    protected $fillable=['Subtotal','Cantidad'];
    protected $table=['DetalleVenta'];

    //Relacion muchos a uno
    public function Producto(){
        return $this->belongsTo(Producto::class,'IdProducto');
    }

    public function Venta(){
        return $this->belongsTo(Venta::class,'IdVenta');
    }

}
