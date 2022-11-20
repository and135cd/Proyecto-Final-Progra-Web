<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriaMarcaPost;
use App\Http\Requests\StoreCategoriaPost;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;

class CategoriaMarcaController extends Controller
{
    public function index(){
        $categorias= Categoria::orderBy('created_at','desc')->cursorpaginate(5);
        return view('dashboard.categoriamarcas.index',compact('categorias'));

    }

    public function create(){
        $categorias=Categoria::all();
        $marcas=Marca::all();
        echo view('dashboard.categoriamarcas.create',['categorias'=>$categorias],['marcas'=>$marcas]);
    }
    public function show(Categoria $categoria){
        $marcas=Marca::all();
        echo view('dashboard.categoriamarcas.show',['categoria'=>$categoria],['marcas'=>$marcas]);
    }

    public function store(StoreCategoriaMarcaPost $request){
        $categoria=Categoria::findOrFail($request->input('IdCategoria'));
        
        $IdMarca=$request->input('IdMarca');
        $categoria->Marcas->attach($IdMarca);
        return redirect('categoriamarcas/create')->with('status', 'Muchas gracias, la marca ha sido asignada creado con éxito');
    }

    public function edit(){

    }

    public function update(){

    }
    public function delete(){

    }
}
