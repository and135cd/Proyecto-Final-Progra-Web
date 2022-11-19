<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    const BORRADOR=1;
    const PUBLICADO=2;
    
    protected $fillable=['NombreProducto','Descripcion','Precio','Estado','Codigo','Imagen','IdMarca'];
    

    public function Sucursales(){
        $this->belongsToMany(Sucursal::class,'IdSucursal')->withPivot('Stock');
    }

    //Relacion muchos a uno
    public function Marca(){
        return $this->belongsTo(Marca::class,'IdMarca');
    }

    //Relacion uno a muchos
    public function DetalleVentas(){
        return $this->hasMany(DetalleVenta::class,'IdDetalleVenta');
    }
}
