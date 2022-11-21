<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepartamentoPost;
use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=>['index']]);
    }
    
    public function index()
    {
        $departamentos=Departamento::orderBy('created_at','desc')->cursorpaginate(5);
        echo view('dashboard.departamentos.index',['departamentos'=>$departamentos]);
    }

    
    public function create()
    {
        echo view ('dashboard.departamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDepartamentoPost $request)
    {
        Departamento::create($request->validated());
        return redirect('departamentos/create')->with('status', 'Muchas gracias, el departamento ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamento)
    {
        echo view('dashboard.departamentos.show', ["departamento"=>$departamento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamento $departamento)
    {
        echo view ('dashboard.departamentos.edit',['departamento'=>$departamento]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDepartamentoPost $request, Departamento $departamento)
    {
        $departamento->update($request->validated());
        return back()->with('status', 'El departamento fue editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $departamento)
    {
        $departamento->delete();
        return back()->with('status','Departamento eliminado exitosamente');
    }
}
