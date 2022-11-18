<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    use HasFactory;
    protected $fillable=['NombreTipo'];
    protected $table='tipousuarios';

    //Relacion uno a muchos
    public function Empleados(){
        return $this->hasMany(Empleado::class,'IdEmpleado');
    }
}
