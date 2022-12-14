<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $fillable=['Direccion','IdDepartamento'];
    protected $table='sucursals';

    //Relacion uno a muchos
    public function Empleados(){
        return $this->hasMany(Empleado::class,'IdEmpleado');
    }

    //Relacion mucho a uno
    public function Departamento(){
        return $this->belongsTo(Departamento::class,'IdDepartamento');
    }

    public function Productos(){
        return $this->hasMany(Producto::class,'IdProducto');
    }

    //ya no se uso
    public function Ventas(){
        return $this->hasMany(Venta::class,'IdVenta');
    }

    
}
