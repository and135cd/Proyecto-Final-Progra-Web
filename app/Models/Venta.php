<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    const EN_ESPERA=1;
    const ENVIADO=2;
    const CANCELADO=3;
    protected $fillable=['Fecha','Total','PrecioEnvio','Estado','Direccion'];
    protected $table=['Venta'];

    //Relacion uno a muchos
    public function DetalleVentas(){
        return $this->hasMany(DetalleVenta::class,'IdDetalleVenta');
    }

    //Relacion muchos a uno
    public function Sucursal(){
        return $this->belongsTo(Sucursal::class,'IdSucursal');
    }

    //Relacion muchos a uno
    public function Departamento(){
        return $this->belongsTo(Departamento::class,'IdDepartamento');
    }

    //Relacion muchos a uno
    public function Cliente(){
        return $this->belongsTo(Cliente::class,'IdCliente');
    }
}
