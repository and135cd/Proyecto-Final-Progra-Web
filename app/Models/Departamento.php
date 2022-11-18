<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $fillable=['NombreDepartamento'];

    //Relacion uno a muchos
    public function Sucursales(){
        return $this->hasMany(Sucursal::class,'IdSucursal');
    }

    public function Ventas(){
        return $this->hasMany(Venta::class,'IdVenta');
    }
}
