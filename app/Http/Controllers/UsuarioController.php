<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    
    public function index()
    {
        $usuarios= User::orderBy('created_at','desc')->cursorpaginate(5);
        return view('dashboard.usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view('dashboard.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPost $request)
    {
        $usuario=new User();
        $usuario->name=$request->input('name');
        $usuario->email=$request->input('email');
        $usuario->tipo=$request->input('tipo');
        $usuario->password=Hash::make($request->input('password'));
        $usuario->save();
       
        
        return redirect('usuarios/create')->with('status', 'Muchas gracias, el usuario ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
        echo view('dashboard.usuarios.show',['usuario'=>$usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return back()->with('status','Usuario eliminado exitosamente');
    }
}
