<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMarcaPost;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    
    public function index()
    {
        $marcas=Marca::orderBy('created_at','desc')->cursorpaginate(5);
        echo view('dashboard.marcas.index',['marcas'=>$marcas]);
    }
    

    
    public function create()
    {
        echo view ('dashboard.marcas.create');
    }

    
    public function store(StoreMarcaPost $request)
    {
        Marca::create($request->validated());
        return redirect('marcas/create')->with('status', 'Muchas gracias, la marca ha sido creada con éxito');
    }

    
    public function show(Marca $marca)
    {
        echo view('dashboard.marcas.show', ["marca"=>$marca]);
    }

   
    public function edit(Marca $marca)
    {
        echo view ('dashboard.marcas.edit',['marca'=>$marca]); 
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

