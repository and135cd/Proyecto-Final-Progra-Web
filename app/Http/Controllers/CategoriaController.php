<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriaPost;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    
    public function index()
    {
       $categorias=Categoria::orderBy('created_at','desc')->cursorpaginate(5);
        echo view('dashboard.categorias.index',['categorias'=>$categorias]);
    }

    
    public function create()
    {
        echo view ('dashboard.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriaPost $request)
    {
        Categoria::create($request->validated());
        return redirect('categorias/create')->with('status', 'Muchas gracias, la categoría ha sido creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        echo view('dashboard.categorias.show', ["categoria"=>$categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        echo view ('dashboard.categorias.edit',['categoria'=>$categoria]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoriaPost $request, Categoria $categoria)
    {
        $categoria->update($request->validated());
        return back()->with('status', 'Fue editada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return back()->with('status','Categoría eliminada exitosamente');
    }
}
