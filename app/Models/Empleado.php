<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable=['Nombres','Apellidos','Telefono','Direccion','Dpi','Usuario','Contraseña'];

    protected $table=['Empleado'];
    //Relacion muchos a uno
    public function TipoUsuario(){
        $this->belongsTo(TipoUsuario::class,'IdTipoUsuario');
    }

    //Relacion muchos a uno
    public function Sucursal(){
        $this->belongsTo(Sucursal::class,'IdSucursal');
    }
}
