<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $fillable=['NombreMarca','IdCategoria'];

    //Relacion uno a mucho
    public function Productos(){
        return $this->hasMany(Producto::class,'IdProducto');
    }

    //Relacion muchos a uno
    public function Categorias(){
        return $this->belongsTo(Categoria::class,'IdCategoria');
    }
}
