<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMarcaPost;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=>['index']]);
    }
    
    public function index()
    {
        $marcas=Marca::orderBy('created_at','desc')->cursorpaginate(5);
        echo view('dashboard.marcas.index',['marcas'=>$marcas]);
    }
    

    
    public function create()
    {
        $categorias=Categoria::all();
        echo view ('dashboard.marcas.create',compact('categorias'));
    }

    
    public function store(StoreMarcaPost $request)
    {
        Marca::create($request->validated());
        return redirect('marcas/create')->with('status', 'Muchas gracias, la marca ha sido creada con éxito');
    }

    
    public function show(Marca $marca)
    {
        $categorias=Categoria::all();
        echo view('dashboard.marcas.show', compact('marca','categorias'));
    }

   
    public function edit(Marca $marca)
    {
        $categorias=Categoria::all();
        echo view ('dashboard.marcas.edit',compact('marca','categorias')); 
    }

    
    public function update(StoreMarcaPost $request, Marca $marca)
    {
        $marca->update($request->validated());
        return back()->with('status', 'La marca fue editada correctamente');
    }

    
    public function destroy(Marca $marca)
    {
        $marca->delete();
        return back()->with('status','Marca eliminada exitosamente');
    }
}

