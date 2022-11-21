<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientePost;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=>['index']]);
    }
    
    public function index()
    {
        $clientes=Cliente::orderBy('created_at','desc')->cursorpaginate(5);
        echo view('dashboard.clientes.index',['clientes'=>$clientes]);
    }

    
    public function create()
    {
        echo view ('dashboard.clientes.create');
    }

   
    public function store(StoreClientePost $request)
    {
        Cliente::create($request->validated());
        return redirect('clientes/create')->with('status', 'Muchas gracias, el cliente ha sido creado con éxito');
    }

   
    public function show(Cliente $cliente)
    {
        echo view('dashboard.clientes.show', ["cliente"=>$cliente]);
    }

    
    public function edit(Cliente $cliente)
    {
        echo view ('dashboard.clientes.edit',['cliente'=>$cliente]); 

    }

    
    public function update(StoreClientePost $request, Cliente $cliente)
    {
        $cliente->update($request->validated());
        return back()->with('status', 'El cliente fue editado correctamente');
    }

    
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return back()->with('status','Cliente eliminado exitosamente');
    }
}
