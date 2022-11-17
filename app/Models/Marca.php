<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $fillable=['NombreMarca'];
    protected $table=['Marca'];

    //Relacion uno a mucho
    public function Productos(){
        return $this->hasMany(Producto::class,'IdProducto');
    }

    //Relacion muchos a muchos
    public function Categorias(){
        return $this->belongsToMany(Categoria::class,'IdCategoria');
    }
}
