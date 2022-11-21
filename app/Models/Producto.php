<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    
    protected $fillable=['name','slug','details','price','shipping_cost','description','sucursal_id','brand_id','image_path'];
    protected $table='productos';

    public function Sucursales(){
        return $this->belongsTo(Sucursal::class,'sucursal_id');
    }

    //Relacion muchos a uno
    public function Marca(){
        return $this->belongsTo(Marca::class,'brand_id');
    }

    //Relacion uno a muchos
    public function DetalleVentas(){
        return $this->hasMany(DetalleVenta::class);
    }
}
