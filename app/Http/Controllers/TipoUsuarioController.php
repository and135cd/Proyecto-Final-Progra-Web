<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipoUsuarioPost;
use App\Models\TipoUsuario;
use Illuminate\Http\Request;

class TipoUsuarioController extends Controller
{
    
    public function index()
    {
        $tipoUsuarios=TipoUsuario::orderBy('created_at','desc')->cursorpaginate(5);
        echo view('dashboard.tipoUsuarios.index',['tipoUsuarios'=>$tipoUsuarios]);
    }

    
    public function create()
    {
        echo view ('dashboard.tipoUsuarios.create');
    }

    
    public function store(StoreTipoUsuarioPost $request)
    {
        TipoUsuario::create($request->validated());
        return redirect('tipos/create')->with('status', 'Muchas gracias, el tipo de usuario ha sido creado con exito');
    }

    
    public function show(TipoUsuario $tipo)
    {
        echo view('dashboard.tipoUsuarios.show', ["tipo"=>$tipo]);
    }

    
    public function edit(TipoUsuario $tipo)
    {
        echo view ('dashboard.tipoUsuarios.edit',['tipo'=>$tipo]); 
    }

    
    public function update(StoreTipoUsuarioPost $request, TipoUsuario $tipo)
    {
        $tipo->update($request->validated());
        return back()->with('status', 'El tipo de usuario fue editado correctamente');
    }

    
    public function destroy(TipoUsuario $tipo)
    {
        $tipo->delete();
        return back()->with('status','Tipo de usuario eliminado exitosamente');
    }
}
