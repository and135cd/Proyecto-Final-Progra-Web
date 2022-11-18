<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $fillable=['Direccion'];

    //Relacion uno a muchos
    public function Empleados(){
        return $this->hasMany(Empleado::class,'IdEmpleado');
    }

    //Relacion mucho a uno
    public function Departamento(){
        return $this->belongsTo(Departamento::class,'IdDepartamento');
    }

    public function Productos(){
        $this->belongsToMany(Producto::class,'IdProducto');
    }

    //Relacion uno amuchos
    public function Ventas(){
        return $this->hasMany(Venta::class,'IdVenta');
    }

    
}
