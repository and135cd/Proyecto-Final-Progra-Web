<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable=['NombreCategoria'];
    protected $table=['Categoria'];

    //Relacion muchos a muchos
    public function Marcas(){
        return $this->belongsToMany(Marca::class,'IdMarca');
    }
}
