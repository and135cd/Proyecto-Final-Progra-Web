<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable=['NombreCliente','Correo','Telefono','Direccion'];
    protected $table=['Cliente'];

    //Relacion uno amuchos
    public function Ventas(){
        return $this->hasMany(Venta::class,'IdVenta');
    }
}
